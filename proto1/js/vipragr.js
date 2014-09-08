var xmlDataSet = "";
// var prefix = "http://sxpheapp002.phe.fs.fed.us/vipr/vendor/rest/PublishingService/";
var prefix = "http://apps.fs.fed.us/vipr/vendor/rest/PublishingService/";

$(function(){

    var rand=Math.floor(Math.random()*999999999999999999999);

    $("#regions").attr("disabled",true);

    searchAgSetup();
    searchContractorSetup();
    loadRegions();
    loadYears();

    $('.step2').change(function(){
        if($("#unitlist").val() !== '' || $("#dispatchlist").val() !== ""){
            getResCat();
            getAgreements();
        } else {
            $("#agsearch3 select").attr("disabled", true);
            $('#resourcelist').empty();
            $("#resourcelist").append("<option value=''>Select a Resource Category</option>");
            $('#resultlist').empty();
        }
    })

    $('#agsearch3 select').change(function(){
        getAgreements();
    })
});

function sortAlpha(a,b){
    return a.innerHTML > b.innerHTML ? 1 : -1;
}

function loadRegions(){
    var url = prefix + "AllRegions/";
    $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonCallback',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function (json) {
            if(json.length !== 0){
                $('#regions').empty().append('<option value="">Select a Region</option>');
                $.each(json, function(){
                    $('#regions').append('<option value="'+this.id+'">'+this.name+'</option>');
                });
                $('#regions').attr('disabled',false);
                getRegions();
            }
        },
        error: function (e) {
            //console.log(e.message);
        }
    });
}

function getRegions(){
    $("#regions").change(function(){
            if($("#regions").val() !== ""){
                $("#units select").attr("disabled", false);
                $('#dispatchcenter select').attr("disabled", false);
                $("#unitlist").empty();
                $('#dispatchlist').empty();
                $("#unitlist").append("<option value=''>Select a Unit</option>");
                $("#dispatchlist").append("<option value=''>Select a Dispatch Center</option>");
                $("#agreementsList").empty();
                $("#agreementsList").append("<option value=''>Select an Agreement</option>");
                $('#resultlist').empty();
                $("#agsearch3 select").attr("disabled", true);
                reg = $('#regions').val();
                getUnits(reg);
                getCenters(reg);
            } else {
                $("#units select").attr("disabled", true);
                $('#dispatchcenter select').attr("disabled", true);
                $("#unitlist").empty();
                $('#dispatchlist').empty();
                $("#unitlist").append("<option value=''>Select a Unit</option>");
                $("#dispatchlist").append("<option value=''>Select a Dispatch Center</option>");
                $("#agreements select").attr("disabled", true);
                $("#agreementsList").empty();
                $("#agreementsList").append("<option value=''>Select an Agreement</option>");
                $('#resultlist').empty();
                $("#agsearch3 select").attr("disabled", true);
            }
        });
}

function getUnits(region){
    var url = prefix + "AllUnitsForRegion/?regionId=" + region;
    $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonCallbackUnits',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function (json) {
            if(json.length !== 0){
                $('#unitlist').empty().append('<option value="">Select a Unit</option>');
                $.each(json, function(){
                    $('#unitlist').append('<option value="'+this.id+'">'+this.name+'</option>');
                });
                $('#unitlist').attr('disabled',false);
                /*if($("#dispatchlist").val() == ''){
                getSecondedOffices(region);
                }*/
            }
        },
        error: function (e) {
            //console.log(e.message);
        }
    });
    $('#unitlist option[value=""]').attr("selected", "selected");
}

function getCenters(region){
    var url = prefix + "AllDispatchCentersForRegion/?regionId=" + region;
    $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonCallback',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function (json) {
            if(json.length !== 0){
                $('#dispatchlist').empty().append('<option value="">Select a Dispatch Center</option>');
                $.each(json, function(){
                    $('#dispatchlist').append('<option value="'+this.id+'">'+this.name+'</option>');
                });
                $('#dispatchlist').attr('disabled',false);
                if($("#dispatchlist").val() === ''){
                    getSecondedOffices(region);
                }
            }
        },
        error: function (e) {
            //console.log(e.message);
        }
    });
    $('#dispatchlist option[value=""]').attr("selected", "selected");
    // optional second service call: AllDispatchCentersForRegionIncludingSecondary/?regionId=&callback=
}

function getResCat(){
    var center = '';
    var unit = '';
    var and = '';

    if($('#unitlist').val() !== ''){
        unit = 'unitId=' + $('#unitlist').val();
    } else {
        unit = 'unitId=';
    }
    if($('#dispatchlist').val() !== ''){
        center = "dispatchCenterId=" + $('#dispatchlist').val();
    } else {
        center = 'dispatchCenterId=';
    }
    if(center !== '' && unit !== ''){
        and = '&';
    }
    var url = prefix + "ResourceCategories/?" + center + and + unit;
    $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonCallbackResCat',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function (json) {
            if(json.length !== 0){
                var sorted = $(json).sort(sortNameDesc);
                $('#resourcelist').empty().append('<option value="">Select a Resource Category</option>');
                $.each(sorted, function(i,v){
                    $('#resourcelist').append('<option value="'+v.id+'">'+v.name+'</option>');
                });
                $('#agsearch3 select').attr('disabled',false);
            }
        },
        error: function (e) {
        //console.log(e.message);
        }
    });

}

function runFilters(resources){
    region = $('#regions').val();
    $("#agsearch3 select").attr("disabled", false);
    unit = $("#unitlist").val();
    center = $("#dispatchlist").val();
    resourceval = $('#resourcelist').val();
    if(unit !== "" ){
        if(resources === true){
            getResCat();
        }
        if(unit !== "" && center !== ""){
            getAgreementsByBoth(region,unit,center);
        } else {
            getAgreementsByUnit(unit);
        }
    }

    if(center !== ""){
        if(resources === true){
            getResCat();
        }
        if(unit !== "" && center !== ""){
            getAgreementsByBoth(unit,center);
        } else {
            getAgreementsByCenter(center);
        }
    }

}

function getAgreementsByUnit(unit){
    //check the year and status filters
    var yearfilter = $('#yearlist').val();
    var statusfilter = $('#statuslist').val();
    var resourcefilter = $('#resourcelist').val();
    var region = $('#regions').val();
    var records = new Array();
    $('ul#resultlist').empty();
    $('office_name',xmlDataSet).each(function(y){
        if($(this).parent().parent().siblings().text() == region){
            if($(this).text().indexOf(unit) != -1){
                $(this).siblings('office_awards').each(function(a){

                    $(this).find("award_file").each(function(e){
                        var af = $(this).text();
                        var display = 1;
                        if(yearfilter != '' && $(this).siblings('year').text() != yearfilter){
                            display = 0;
                        }
                        if(statusfilter != '' && $(this).siblings('status').text() != statusfilter){
                            display = 0;
                        }
                        if(resourcefilter != ''){
                            found = 0
                            $(this).siblings('dispatch_center').children('resource_center').each(function(e){
                                if($(this).text() == resourcefilter){
                                    found++;
                                }
                            })

                            if(found == 0){
                                display = 0;
                            }

                        }
                        if(display == 1){
                            records.push(af.split('-'));

                        }

                    });

                });

            }
        }
    });
    if(records.length === 0){
        $('#resultlist').append("<li class='noag'>No Agreements Found (unit)</li>");
    } else {
        if( records.length > 0 ){
            records.sort(multisort);

            var len = records.length;
            for (var i=0; i<len; i++){
                var n = records[i][0]+'-'+records[i][1]+'-'+records[i][2]+'-'+records[i][3]+'-'+records[i][4];
                $("#resultlist").append("<li><a href='static/awarded_equipment_reports/" + n + "'>" + n + "</a></li>");
            }
        }
    }

}

function multisort(a,b){
    var o1 = a[1].toLowerCase();
    var o2 = b[1].toLowerCase();

    var p1 = a[3].toLowerCase();
    var p2 = b[3].toLowerCase();

    var q1 = a[4].toLowerCase();
    var q2 = b[4].toLowerCase();

    if (o1 != o2) {
        if (o1 < o2) return -1;
        if (o1 > o2) return 1;
        return 0;
    }
    if (p1 != p2){
        if (p1 < p2) return -1;
        if (p1 > p2) return 1;
        return 0;
    }
    if (q1 < q2) return -1;
    if (q1 > q2) return 1;
    return 0;
}

function getAgreementsByCenter(center){
    //check the year and status filters
    yearfilter = $('#yearlist').val();
    statusfilter = $('#statuslist').val();
    resourcefilter = $('#resourcelist').val();
    records = new Array();
    $('#resultlist').empty();
    $('award',xmlDataSet).each(function(y){
        $(this).children('dispatch_center').each(function(a){
            if($(this).children('centername').text().indexOf(center) != -1){
                var af = $(this).siblings('award_file').text();
                var display = 1;
                if(yearfilter != '' && $(this).siblings('year').text() != yearfilter){
                    display = 0;
                }
                if(statusfilter != '' && $(this).siblings('status').text() != statusfilter){
                    display = 0;
                }
                if(resourcefilter != ''){
                    found = 0
                    $(this).children('resource_center').each(function(e){
                        if($(this).text() == resourcefilter){
                            found++;
                        }
                    })

                    if(found == 0){
                        display = 0;
                    }

                }

                if(display == 1){
                    records.push(af.split('-'));
                }
            }

        });

    });
    if(records.length === 0){
        $('#resultlist').append("<li class='noag'>No Agreements Found (unit)</li>");
    } else {
        if( records.length > 0 ){
            records.sort(multisort);

            var len = records.length;
            for (var i=0; i<len; i++){
                var n = records[i][0]+'-'+records[i][1]+'-'+records[i][2]+'-'+records[i][3]+'-'+records[i][4];
                $("#resultlist").append("<li><a href='static/awarded_equipment_reports/" + n + "'>" + n + "</a></li>");
            }
        }
    }

}

function getAgreementsByBoth(region,unit,center){
    //check the year and status filters
    yearfilter = $('#yearlist').val();
    statusfilter = $('#statuslist').val();
    resourcefilter = $('#resourcelist').val();
    bothrecords = new Array();
    bothrecords.length = 0;
    $('#resultlist').empty();

    /*$('office_name',xmlDataSet).each(function(y){
        if($(this).text().indexOf(unit) != -1){
            $(this).siblings('office_awards').each(function(a){
                $(this).children('award').each(function(a){
                    $(this).children('dispatch_center').each(function(a){
                        if($(this).children('centername').text().indexOf(center) != -1){

                            var af = $(this).siblings('award_file').text();
                            var display = 1;
                            if(yearfilter != '' && $(this).siblings('year').text() != yearfilter){
                                display = 0;
                            }
                            if(statusfilter != '' && $(this).siblings('status').text() != statusfilter){
                                display = 0;
                            }
                            if(resourcefilter != ''){
                                found = 0
                                $(this).children('resource_center').each(function(e){
                                    if($(this).text() == resourcefilter){
                                        found++;
                                    }
                                })

                                if(found == 0){
                                    display = 0;
                                }

                            }

                            if(display == 1){
                                bothrecords.push(af.split('-'));
                                af = '';
                            }

                        }

                    });
                });
            });
        }
    });*/
    $('region_name',xmlDataSet).each(function(y){
        if($(this).text().indexOf(region) != -1){
            $(this).siblings('region_offices').each(function(a){
                $(this).children('office,seconded_office').each(function(a){
                    $(this).children('office_name').each(function(a){
                        if($(this).text().indexOf(unit) != -1){
                            $(this).siblings('office_awards').each(function(a){
                                $(this).children('award').each(function(a){
                                    $(this).children('dispatch_center').each(function(a){
                                        if($(this).children('centername').text().indexOf(center) != -1){
                                            var af = $(this).siblings('award_file').text();
                                            var display = 1;
                                            if(yearfilter != '' && $(this).siblings('year').text() != yearfilter){
                                                display = 0;
                                            }
                                            if(statusfilter != '' && $(this).siblings('status').text() != statusfilter){
                                                display = 0;
                                            }
                                            if(resourcefilter != ''){
                                                found = 0
                                                $(this).children('resource_center').each(function(e){
                                                    if($(this).text() == resourcefilter){
                                                        found++;
                                                    }
                                                })

                                                if(found == 0){
                                                    display = 0;
                                                }

                                            }

                                            if(display == 1){

                                                bothrecords.push(af.split('-'));
                                            }
                                        }

                                    });
                                });
                            });
                        }
                    })
                })
            })
        }

    });

    if(bothrecords.length === 0){
        $('#resultlist').append("<li class='noag'>No Agreements Found (unit)</li>");
    } else {
        if( bothrecords.length > 0 ){
            bothrecords.sort(multisort);
            // Searching for both center and unit can return results from multiple regions due to seconded offices showing up.  This removes duplicates from the list so we're just getting single results.


            var len = bothrecords.length;
            for (var i=0; i<len; i++){
                var n = bothrecords[i][0]+'-'+bothrecords[i][1]+'-'+bothrecords[i][2]+'-'+bothrecords[i][3]+'-'+bothrecords[i][4]
                $("#resultlist").append("<li><a href='static/awarded_equipment_reports/" + n + "'>" + n + "</a></li>");
            }
        }
    }
}

function getAgreements(){
    var unit= $('#unitlist').val();
    var center = $('#dispatchlist').val();
    var resource = $('#resourcelist').val();
    var status = $('#statuslist').val();
    var year = $('#yearlist').val();
    //var url = prefix + "AgreementsBySearchCriteria/?unitId="+unit+"&dispatchCenterId="+center+"&resCatId="+resource+"&status="+status+"&solYear="+year;
    var url = prefix + "AgreementsBySearchCriteria/?unitId="+unit+"&dispatchCenterId="+center+"&resCatId="+resource+"&solYear="+year+"&status="+status;
    $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonCallbackAgreements',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function (json) {
            if(json.length !== 0){
                $('#zeroResultsMessage').hide();
                if($('#resultlist').css('opacity') === 1){
                    $('#resultlist').animate({
                        "opacity":0
                    }, 500, function() {
                        $(this).hide();
                    })
                }
                $('.agpdflink').unbind();
                $('#resultlist').empty();
                $.each(json, function(){
                    if(this.agreementFileId != ''){
                        $('#resultlist').append('<li><button class="agpdflink" id="'+this.agreementFileId+'" tabindex="8">'+this.name+'</button></li>');
                    }
                })
                if($('#resultlist li').length > 0 ){
                    $('#zeroResultsMessage').hide();
                    $('#searchresultlist').show().animate({
                        "opacity":1
                    },500);
                } else {
                    $('#searchresultlist').animate({
                        "opacity":0
                    },500, function() {
                        $(this).hide();
                    });
                    $('#zeroResultsMessage').show();
                }
                $('.agpdflink').click(function(){
                    var a = $(this).text();
                    getAgreement(a);
                })
            } else {
                $('#resultlist').empty();
                $('#zeroResultsMessage').show();
            }
        },
        error: function (e) {
            //console.log(e.message);
        }
    })
}

function loadYears(){
    var url = prefix + "ActiveSolicitationYears/";
    $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonCallbackYears',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function(json){
            if(json.length !== 0){
                $.each(json, function(i,v){
                    $('#yearlist').append('<option value="'+v.id+'">'+v.name+'</option>');
                })
            }
        }

    })
}


function searchAgSetup(){
    $('#agreementNumber').focus(function(){
        if($(this).val() == "AG-xxxx-X-##-####"){
            $(this).val("");
            $(this).removeClass("defaulttext");
        }
    });
    $('#agreementNumber').blur(function(){
        if($(this).val() == ""){
            $(this).val("AG-xxxx-X-##-####");
            $(this).addClass("defaulttext");
        }
    })
    $('#agNumLookup').submit(function(){
        AgSearch();
        return false;
    })

}

function searchContractorSetup(){
    $('#contName').focus(function(){
        if($(this).val() == 'Contractor Name'){
            $(this).val("");
            $(this).removeClass("defaulttext");
        }
    });
    $("#contName").blur(function(){
        if($(this).val() == ""){
            $(this).val("Contractor Name");
            $(this).addClass("defaulttext");
        }
    })
    $('#contractorLookup').submit(function(){
        contSearch();
        return false;
    })
}

function AgSearch(){
    if($("#agreementNumber").val() == "AG-XXXX-X-##-####" || $("#agreementNumber").val() == "") {
        alert("Please enter an Agreement Number to search for.");
        return false;
    } else {
        if(checkAgFormat($('#agreementNumber').val())){
            getAgreement($('#agreementNumber').val());
            return false;
        } else {
            alert("Sorry, the agreement number format is incorrect.  Please reenter the number and try again.  Remember, the format needs to match the example show above the search box.");
            return false;
        }

    }
}

// matches given string to reg expression to confirm format.
function checkAgFormat(agString){
    if(agString.match(/AG\-[0-9a-zA-Z]{4}\-[a-zA-Z]\-[0-9]{2}\-[0-9]{4}/)){
        return true;
    } else {
        return false;
    }
}

function getAgreement(agString){
    var url = prefix + "CanGetAgreementPdfForContractNumber/?contractNumber=" + agString;
    //console.log(url);
    $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonCallback',
        contentType: "application/json",
        dataType: 'jsonp',
        timeout: 5000,
        success: function (json) {
            if(json[0] == 1){
                getPDF(agString);
            } else {
                alert('This agreement is not available. This could be because the agreement has not been published yet or the agreement was canceled or expired at least one year ago. If the former, try again at a later date.');
            }

        },
        error: function (e) {
            console.log(e);
            alert('There was a problem contacting the server.  Please try again later.');
        }
    })
}


/*
 * Contractor search functions
 */


function contSearch(){
    if($("#contName").val() === "Contractor Name" || $("#contName").val() === "") {
        $('.contractors li').unbind();
        $('.contractors').empty().hide().css('opacity',0);
        alert("Please enter a Contractor Name to search for.");
        return false;
    } else {
        getContractor($('#contName').val());
    }
}

function getContractor(contString){
    myreg = contString.toLowerCase().replace(/^\s*|\s*$/g,'');  //change the string to all lowercase with no spaces.
    $('.contractors button').unbind();
    $(".contractors").empty().hide().css('opacity',1);  // Remove any lists that preexist on the page

    var url = prefix + "AgreementsByContractorName/?contractorName=" + contString;
    $.ajax({
        type: 'GET',
        url: url,
        async: false,
        jsonpCallback: 'jsonCallback',
        contentType: "application/json",
        dataType: 'jsonp',
        success: function (json) {
            if(json.length !== 0 && json[0].name){
                $('#contName').removeClass('formerror');
                $.each(json, function(index){
                    $.each(this, function(k,v){
                        if(k == 'name'){
                            $('.contractors').append(
                                "<button tabindex='6' value='" + v +"'>"+ v +"</button>"
                            )
                        }
                    })
                })
                $('.contractors').show().animate({
                    "opacity":1
                }, 500, function() {
                    $('.contractors button').click(function(){
                        var agreementNum = $(this).text();
                        getPDF(agreementNum);
                    })
                })

            } else {
                $('#contName').addClass('formerror');  //if a contractor wasn't found, add the error class to the form text box.
                $('.contractors button').unbind();
                $(".contractors").empty().hide().css('opacity',1);
                alert("Sorry, the Contractor you entered wasn't found in our database.  Please check the name you entered and try again.");
            }
        },
        error: function (e) {
            //console.log(e.message);
        }
    })
    return false;  // negate the submission of the form.
}


function searchFoundContractors(contName, contArray){
    y = 'false';  //default value is that we didn't find anything.
    for (var i = contArray.length - 1; i >= 0; i--){        // loop over the array of contractors
        if(contArray[i].match(contName)){
            y = 'true';
        }
    };

    //return (contArray.indexOf(contName) != -1);




    return y;  //send back the value we found.*/
}


function getPDF(agreementNum){
    $('body').css('cursor','wait');
    url = prefix + 'AgreementPdfByContractNumber/?contractNumber=' + agreementNum;
    var iframe;
    var hiddenIFrameID = 'hiddenDownloader';
    iframe = document.getElementById(hiddenIFrameID);
    if (iframe === null) {
        iframe = document.createElement('iframe');
        iframe.id = hiddenIFrameID;
        iframe.style.display = 'none';
        document.body.appendChild(iframe);
    }
    iframe.src = url;
    $('body').css('cursor','default');
}

function getSecondedOffices(region){
    $('region_name',xmlDataSet).each(function(y){
        if($(this).text() == region){  // find the matching region entry
            $(this).siblings().each(function(d){ //look at the sibling 'region_offices'
                    $(this).find('seconded_office').each(function(p){
                            $(this).find("office_name").each(function(){
                                ofn = $(this).text();
                                ofncode = ofn.split(" - ");
                                if(ofn !== ''){
                                    $("#unitlist").prepend("<option value='" + ofncode[0] + "'>" + ofn + "</option>");
                                }
                            });
                    });
            });
        }
    });
}

function sortName(a,b){
    if (a.name == b.name){
        return 0;
    }
    return a.name> b.name ? 1 : -1;
};

function sortNameDesc(a,b){
    return sortName(a,b) * 1;
};