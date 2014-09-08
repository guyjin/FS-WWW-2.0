<?php
    $pageTitle = "VIPR Preseason Agreements";
    $pageMenu = "incident";
    $bodyClass = "inc";
    $cssList = "vipragr.css";
    $jsList = "vipragr.js";
    include_once '../partials/pageStart.php';
?>

<div class="section clean" id="topics">
    <div>
        <p>
            <strong>VIPR preseason agreements are available for the following equipment/service categories:</strong>
        </p>
        <div class="list">
            <ul>
                <li>Aircraft Rescue Firefighting Apparatus</li>
                <li>All Terrain Vehicles</li>
                <li>Bus, Crew Carrier</li>
                <li>Chainsaw Repair Kit</li>
                <li>Chippers</li>
                <li>Clerical Support Unit</li>
                <li>Coach Bus</li>
                <li>Communications Trailer</li>
                <li>Copiers</li>
                <li>Dozer</li>
                <li>Engine</li>
                <li>Excavator</li>
                <li>Faller and Faller Module</li>
                <li>Feller Bunchers</li>
                <li>Fuel Tender</li>
                <li>Generic<span style="color:red;">*</span></li>
                <li>GIS Unit</li>
                <li>Gray Water Truck</li>
                <li>Handwashing Unit</li>
                <li>Helicopter Operations Support Trailer</li>
                <li>Masticators-Boom Mounted</li>
                <li>Masticators-Track Mounted</li>
                <li>Mechanic with Service Truck</li>
                <li>Mobile Laundry</li>
                <li>Mobile Sleeper Unit</li>
                <li>Portable Toilet</li>
                <li>Potable Water Truck</li>
                <li>Refrigerated Trailer</li>
                <li>Rental Passenger Vehicles</li>
                <li>Rental Trucks</li>
                <li>Road Graders</li>
                <li>Skidder</li>
                <li>Skidgines</li>
                <li>Softtrack</li>
                <li>Tent and Canopy</li>
                <li>Tractor Plow</li>
                <li>Transport</li>
                <li>Water Tenders</li>
                <li>Weed Washing Unit</li>
            </ul>
        </div>
        <p>
            <span style="color:red;">*</span>Generic resources are used for various local equipment and services not listed on the National Solicitation Plan for I-BPAs, but may be identified on the Method of Hire (MOH) chart located in the <a href="http://www.nwcg.gov/teams/ibpwt/documents/index.htm" tabindex="2">Interagency Incident Business Management Handbook (IIBMH)</a>.
        </p>
       <div class="well">
           <p tabindex="-1" id="search-types">
               <strong>There are three ways to search for I-BPAs:</strong>
           </p>
           <ul>
               <li><a href="#agnum" aria-labelledby="search-types agnum" tabindex="3">Agreement Number</a></li>
               <li><a href="#contractor" aria-labelledby="search-types contractor" tabindex="3">Contractor</a></li>
               <li><a href="#filter" aria-labelledby="search-types filter" tabindex="3">Region/multi-selection criteria</a></li>
           </ul>
           <p>
               <strong>IMPORTANT</strong>: The agreements will be in .pdf files. To view the .pdf files, you MUST have <a href="http://get.adobe.com/reader/" tabindex="4">Adobe Reader</a>
           </p>
       </div>
    </div>
</div>

<div class="section colorBlock colorBlock2" role="application">
    <a href="" name="agnum"></a>
    <h2>Search by Agreement Number</h2>
    <p class="emphasis">Enter the agreement number (AG-xxxx-X-##-####)</p>
    <form action="" method="post" id="agNumLookup">
        <input id="agreementNumber" class="defaulttext" name="agreementNumber" name="agreementNumber" value="AG-xxxx-X-##-####" tabindex="5"  />
        <input type="submit" id="searchforag" value="Find Agreement" tabindex="5"/>
    </form>
</div>
<div class="section colorBlock colorBlock1" role="application">
    <a href="" name="contractor"></a>
    <h2>Search by Contractor</h2>
    <p class="emphasis">Enter the name or partial name of the contractor</p>
    <form action="" method="post" id="contractorLookup">
        <input id="contName" name="contName" value="Contractor Name" tabindex="6" class="defaulttext" />
        <input id="searchforContractor" type="submit" tabindex="6" value="Find Contractor" />
    </form>
    <div class="contractors" aria-live="assertive" tabindex="-1">

    </div>
</div>
<a name="filter"></a>
<div class="section" id="multisearch" role="application">
    <div>
        <h2>Search by Region/Multi-selection criteria</h2>
        <p>
            <strong>IMPORTANT:</strong> The information displayed on this Web site is tied to the Contracting Officer (CO) of the agreement and the CO's region and home unit. If a CO maintains an agreement for a region other than their own, the agreement's host dispatch center will be listed under the CO's region and home unit, NOT the region where the dispatch center is located.
        </p>
        <p>
            <strong>NOTE:</strong> If the agreement you are looking for was solicited nationally (e.g., crew carrier bus, refrigerated trailers and GIS units), the agreements will be listed under R13 (National) under the host dispatch center the vendor selected when responding to the solicitation.
        </p>

        <div class="agreementsearch well">
            <div id="agsearch1">
                <span class="agsearchnum">1.</span>
                <div class="agsection">
                    <div id="regionlist" class="agsearchbox">
                        <label for="regions">Region </label>
                        <select name="regions" id="regions" tabindex="8"></select>
                    </div>
                </div>
            </div>
            <div id="agsearch2">
                <span class="agsearchnum">2.</span>
                <div class="agsection">
                    <div id="units" class="agsearchbox">
                        <label for="unitlist">Unit</label>
                        <select name="unitlist" id="unitlist" class="step2" disabled tabindex="8">
                            <option value="">Select a Unit</option>
                        </select>
                    </div>
                    <div class="andor">
                        and/or
                    </div>
                    <div id="dispatchcenter" class="agsearchbox">
                        <label for="dispatchlist">Dispatch Center</label>
                        <select name="dispatchlist" id="dispatchlist" class="step2" disabled tabindex="8">
                            <option value="">Select a Dispatch Center</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="agsearch3">
                <span class="agsearchnum">3.</span>
                <div class="agsection">
                    <div id="resource" class="agsearchbox">
                        <label for="resourcelist">Resource Category</label>
                        <select name="resourcelist" id="resourcelist" disabled tabindex="8">
                            <option value="">Select a Resource Category</option>
                        </select>
                    </div>

                    <div class="andor" id="firstandor">
                        and/or
                    </div>
                    <div id="fixedfilters">
                        <div id="status" class="agsearchbox">
                            <label for="statuslist">Status</label>
                            <select name="statuslist" id="statuslist" disabled tabindex="8">
                                <option value="">Select a Status</option>
                                <option value="Active">Active</option>
                                <option value="Canceled">Canceled</option>
                                <option value="Expired">Expired</option>
                            </select>
                        </div>
                        <div class="andor">
                            and/or
                        </div>
                        <div id="year" class="agsearchbox">
                            <label for="yearlist">Solicitation Year</label>
                            <select name="yearlist" id="yearlist" disabled tabindex="8">
                                <option value="">Select a Year</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div id="searchresultlist">
                <h2>Agreement Search Results</h2>
                <ul id="resultlist">

                </ul>
                <p id="zeroResultsMessage">
                    No agreements were found.  Please try changing your search criteria.
                </p>
            </div>
        </div>
    </div>
</div>
<?php
    include_once '../partials/pageEnd.php';
?>