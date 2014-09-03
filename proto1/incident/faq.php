<?php
  $pageTitle = "Vendor Application FAQs";
  $pageMenu = "incident";
  $bodyClass = "inc";
  $cssList = "faq.css";
  $jsList = "faq.js";
  include_once '../partials/pageStart.php';
?>

<div class="section" id="topics">

    <div>
        <p>
            Click on a topic, and then click a question to view its answer.
        </p>
        <div class="subjects">
            <ul class="top">
                <li>
                    <a href="acronyms.php" target="_blank">What is (Acronyms and Definitions)</a>
                </li>

                <li>
                    <a data-target="overview">Overview of VIPR &amp; the Vendor Application</a>
                    <div class="faqList" id="overview">
                        <div>
                            <a href="" name="overview"></a>
                            <h3>Overview of VIPR &amp; the Vendor Application
                            <span class="closeFAQ"><span class="glyphicon glyphicon-remove"></span>close</span></h3>
                            <ol class="faq bulleted" role="tablist" aria-live="polite">
                                <li>
                                    <dl class="scrunchy">
                                        <dt><p tabindex="0" id="tab0" role="tab">
                                            What is VIPR?
                                        </p></dt>
                                        <dd id="panel0" aria-labelledby="tab0" role="tabpanel">
                                            <p>VIPR is the Virtual Incident Procurement (VIPR) system that allows the Contracting Officers (COs) to create, award, and manage solicitations and agreements through an electronic procurement process. VIPR provides numerous tools for COs to use for incident blanket purchase agreements (I-BPAs), including creation of solicitations and amendments, collection and evaluation of offers, electronic award and modification of agreements, electronic management of contract files, and creation of Dispatch Priority Lists (DPLs).</p>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="scrunchy">
                                        <dt><p tabindex="0" id="tab1" role="tab">
                                            Is VIPR an interagency system?
                                        </p></dt>
                                        <dd id="panel1" aria-labelledby="tab1" role="tabpanel">
                                            <p>
                                                VIPR is a USDA Forest Service incident procurement system. The Department of Interior has decided not to use VIPR at this time, and there has been no expressed interest from State agencies to participate in VIPR.
                                            </p>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="scrunchy">
                                        <dt><p tabindex="0" id="tab2" role="tab">What is the vendor application?</p></dt>
                                        <dd id="panel1" aria-labelledby="tab2" role="tabpanel">
                                            <p>
                                                The VIPR vendor application is an interactive, Web-based application designed to provide vendors with a user friendly, intuitive vendor solution when using VIPR.  The vendor application uses wizard technology to provide step-by-step instructions to assist vendors in adding their resources into VIPR, finding solicitations that match their resources, submitting quotes on solicitations and amendments, and updating their company and resource information.
                                            </p>
                                            <p>
                                                The vendor application is available for vendors responding to solicitations and modifications for:
                                            </p>
                                            <ul>
                                                <li>Aircraft Rescue Firefighting Apparatus</li>
                                                <li>All Terrain Vehicle</li>
                                                <li>Chainsaw Repair Service</li>
                                                <li>Chipper</li>
                                                <li>Clerical Support Unit</li>
                                                <li>Coach Bus</li>
                                                <li>Communications Trailer</li>
                                                <li>Copier</li>
                                                <li>Crew Carrier Bus</li>
                                                <li>Faller
                                                    <ul>
                                                        <li>Faller Module</li>
                                                        <li>Single Faller</li>
                                                    </ul>
                                                </li>
                                                <li>Fuel Tenders</li>
                                                <li>Generic<span style="color:red;">*</span></li>
                                                <li>GIS Unit</li>
                                                <li>Heavy Equipment
                                                    <ul>
                                                        <li>Dozer</li>
                                                        <li>Excavator</li>
                                                        <li>Tractor Plow</li>
                                                        <li>Transport</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Heavy Equipment with Water
                                                    <ul>
                                                        <li>Pumper Cat</li>
                                                        <li>Skidgine</li>
                                                        <li>Softtrack</li>
                                                    </ul>
                                                </li>
                                                <li>Helicopter Operations Support Trailer</li>
                                                <li>Mechanic with Service Truck</li>
                                                <li>Miscellaneous Heavy Equipment
                                                    <ul>
                                                        <li>Feller Buncher</li>
                                                        <li>Mulcher/Masticator - Boom Mounted</li>
                                                        <li>Road Grader</li>
                                                        <li>Skidder</li>
                                                        <li>Strip Mulcher/Masticator</li>
                                                    </ul>
                                                </li>
                                                <li>Mobile Laundry Unit</li>
                                                <li>Mobile Sleeper Unit</li>
                                                <li>Portable Toilet</li>
                                                <li>Potable &amp; Gray Water Trucks/Handwashing Station (Trailer Mounted)
                                                    <ul>
                                                        <li>Handwashing Station (Trailer Mounted)</li>
                                                        <li>Gray Water Truck</li>
                                                        <li>Potable Water Truck</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Refridgerated Trailers
                                                </li>
                                                <li>Rental Vehicle
                                                    <ul>
                                                        <li>Rental Passenger Vehicle</li>
                                                        <li>Rental Truck</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Tent
                                                    <ul>
                                                        <li>Tent</li>
                                                        <li>Tent - Canopy</li>
                                                    </ul>
                                                </li>
                                                <li>Vehicle with Driver </li>
                                                <li>
                                                    Water Handling
                                                    <ul>
                                                        <li>Engines</li>
                                                        <li>Water Tender (Support)</li>
                                                        <li>Water Tender (Tactical)</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Weed Washing Units
                                                </li>
                                            </ul>
                                            <p>
                                    <span style="color:red;">*</span>Generic resources are used for various local equipment and services not listed on the National Solicitation Plan for I-BPAs, but may be identified on the Method of Hire (MOH) chart located in the <a href="http://www.nwcg.gov/teams/ibpwt/documents/index.htm">Interagency Incident Business Management Handbook (IIBMH)</a>.
                                </p>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="scrunchy">
                                        <dt><p tabindex="0" id="tab3" role="tab">Who will use the vendor application? </p></dt>
                                        <dd id="panel1" aria-labelledby="tab3" role="tabpanel">
                                            <p>The vendor application is available for vendors responding to solicitations and modifications for:</p>
                                            <ul>
                                                <li>Aircraft Rescue Firefighting Apparatus</li>
                                                <li>All Terrain Vehicle</li>
                                                <li>Chainsaw Repair Service</li>
                                                <li>Chipper</li>
                                                <li>Clerical Support Unit</li>
                                                <li>Coach Bus</li>
                                                <li>Communications Trailer</li>
                                                <li>Copier</li>
                                                <li>Crew Carrier Bus</li>
                                                <li>Faller
                                                    <ul>
                                                        <li>Faller Module</li>
                                                        <li>Single Faller</li>
                                                    </ul>
                                                </li>
                                                <li>Fuel Tenders</li>
                                                <li>Generic<span style="color:red;">*</span></li>
                                                <li>GIS Unit</li>
                                                <li>Heavy Equipment
                                                    <ul>
                                                        <li>Dozer</li>
                                                        <li>Excavator</li>
                                                        <li>Tractor Plow</li>
                                                        <li>Transport</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Heavy Equipment with Water
                                                    <ul>
                                                        <li>Pumper Cat</li>
                                                        <li>Skidgine</li>
                                                        <li>Softtrack</li>
                                                    </ul>
                                                </li>
                                                <li>Helicopter Operations Support Trailer</li>
                                                <li>Mechanic with Service Truck</li>
                                                <li>Miscellaneous Heavy Equipment
                                                    <ul>
                                                        <li>Feller Buncher</li>
                                                        <li>Masticator  (Boom Mounted)</li>
                                                        <li>Masticator (Track Mounted)</li>
                                                        <li>Road Grader</li>
                                                        <li>Skidder</li>
                                                    </ul>
                                                </li>
                                                <li>Mobile Laundry Unit</li>
                                                <li>Mobile Sleeper Unit</li>
                                                <li>Portable Toilet</li>
                                                <li>Potable &amp; Gray Water Trucks/Handwashing Station (Trailer Mounted)
                                                    <ul>
                                                        <li>Handwashing Station (Trailer Mounted)</li>
                                                        <li>Gray Water Truck</li>
                                                        <li>Potable Water Truck</li>
                                                    </ul>
                                                </li>
                                                <li>Rental Vehicle
                                                    <ul>
                                                        <li>Rental Passenger Vehicle</li>
                                                        <li>Rental Truck</li>
                                                    </ul>

                                                </li>
                                                <li>
                                                    Tent
                                                    <ul>
                                                        <li>Tent</li>
                                                        <li>Tent - Canopy</li>
                                                    </ul>
                                                </li>
                                                <li>Vehicle with Driver </li>
                                                <li>
                                                    Water Handling
                                                    <ul>
                                                        <li>Engines</li>
                                                        <li>Water Tender (Support)</li>
                                                        <li>Water Tender (Tactical)</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Weed Washing Units
                                                </li>
                                            <p>
                                                <span style="color:red;">*</span>Generic resources are used for various local equipment and services not listed on the National Solicitation Plan for I-BPAs, but may be identified on the Method of Hire (MOH) chart located in the <a href="http://www.nwcg.gov/teams/ibpwt/documents/index.htm">Interagency Incident Business Management Handbook (IIBMH)</a>.
                                            </p>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="scrunchy">
                                        <dt><p tabindex="0" id="tab4" role="tab">When will the vendor application be available?</p></dt>
                                        <dd id="panel1" aria-labelledby="tab4" role="tabpanel">
                                            <p>The implementation of resources into the vendor application will occur in phases. Resources scheduled for solicitation or re-solicitation in 2011 and beyond will be developed for use with the new vendor application in VIPR. All other remaining resources will be converted in 2013, so that Formatta will no longer be used after the 2013 season.</p>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="scrunchy">
                                        <dt><p tabindex="0" id="tab5" role="tab">When will the vendor application be available for all types of solicitations?
                                        </p></dt>
                                        <dd id="panel1" aria-labelledby="tab5" role="tabpanel">
                                            <p>
                                                All types of soicitations are now using the vendor application
                                            </p>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl class="scrunchy" id="tab6" role="tab">
                                        <dt><p tabindex="0">Where can I find out more about the vendor application and how I am suppose to use it? </p></dt>
                                        <dd id="panel1" aria-labelledby="tab6" role="tabpanel">
                                            <p>The vendor app uses wizard technology to provide step-by-step instructions to assist you with adding your resources into VIPR, finding solicitations that match your resources, submitting quotes on solicitations and amendments, and updating your company and resource information. In addition, there are several resources are available to assist you with using the application, such as the online help within the application itself, as well as the VIPR Vendor Application Web page at  <a href="vendorapp.php">http://www.fs.fed.us/business/incident/vendorapp.php</a>.</p>
                                        </dd>
                                    </dl>
                                </li>

                                <li>
                                    <dl class="scrunchy">
                                        <dt><p tabindex="0" id="tab7" role="tab">

                                                Where can I find information about the results from online VIPR surveys?

                                        </p></dt>
                                        <dd id="panel1" aria-labelledby="tab7" role="tabpanel">
                                            <p>
                                                The Forest Service had asked you to give us your feedback in online surveys regarding VIPR customer service and support as well as VIPR system functionality and availability.  A <a href="static/Vendor Survey Newsletter REV20140515.pdf">summary</a> of the results from the online surveys, to include concerns, changes that have been implemented as a result of the feedback received, and actions for the furture is now available.
                                            </p>
                                        </dd>
                                    </dl>
                                </li>
                            </ol>
                        </div>
                    </div>
                </li>

                <li>
                    <a data-target="contracting">Contracting with the Forest Service on Fire / Incidents</a>
                    <div class="faqList" id="contracting">
                        <h3>
                            Contracting with the Forest Service on Fire / Incidents
                            <span class="closeFAQ"><span class="glyphicon glyphicon-remove"></span>close</span>
                        </h3>
                        <ol class="faq bulleted" role="tablist" aria-live='polite'>
                            <li>
                                <dl class="scrunchy">
                                    <dt><p tabindex='0' role='tab' id="tab8">I am a new vendor. How can I obtain an agreement with the Forest Service?</p> </dt>
                                    <dd id="panel8" aria-labelledby="tab8" role="tabpanel">
                                        <p>For instructions on how to do incident procurement business with the Forest Service, please visit the <a href="vendors.php">AQM Incident Procurement Web site</a>.</p>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="scrunchy">
                                    <dt><p tabindex='0' role='tab' id="tab9">How do I find a Forest Service solicitation for preseason incident procurement?</p>
                                    </dt>
                                    <dd id="panel9" aria-labelledby="tab9" role="tabpanel">
                                        <p>Solicitations are posted to <a href="http://www.fbo.gov">FedBizOpps</a> (FBO) and start with the title of "VIPR I-BPA for". Every solicitation is different, so read them carefully. </p>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="scrunchy">
                                    <dt><p tabindex='0' role='tab' id="tab10">How do I find out what equipment solicitations are planned for each year?</p></dt>
                                    <dd id="panel10" aria-labelledby="tab10" role="tabpanel">
                                        <p>To view the solicitations planned for each year, you can access the <a href="compsolplan.php">National Solicitation Plan for I-BPAs</a>. </p>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="scrunchy">
                                    <dt><p tabindex='0' role='tab' id="tab11">How do I decide which solicitations to respond to?</p> </dt>
                                    <dd id="panel11" aria-labelledby="tab11" role="tabpanel">
                                        <p>You can respond to any solicitation; however, there are a couple of caveats. First, awards are restricted to one I-BPA per piece of equipment; therefore you will not be awarded multiple awards for the same piece of equipment for the same purpose. Second, regions can only award to dispatch centers located in that region, therefore, you must respond to a solicitation that covers the geographic area of the dispatch centers where you wish to be dispatched. You must be able to respond by the date and time needed if you choose to respond to a solicitation in another geographic area.</p>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="scrunchy">
                                    <dt><p tabindex='0' role='tab' id="tab12">How can I sign up my equipment with the BLM?</p> </dt>
                                    <dd id="panel12" aria-labelledby="tab12" role="tabpanel">
                                        <p>The BLM and the DOI are now acquiring goods and services electronically using the Internet. More information is available at the BLM Web site: <a href="http://www.blm.gov/natacq">http://www.blm.gov/natacq</a>.</p>
                                    </dd>
                                </dl>
                            </li>
                        </ol>
                    </div>
                    <ul>
                        <li><a data-target="cpars">Contractor Performance Assessment Report System (CPARS)</a> </li>
                        <li><a data-target="duns">DUNS Number</a></li>
                        <li><a data-target="email">E-mail Address</a></li>
                        <li><a data-target="sam">System for Award Management (SAM) and VIPR</a></li>
                        <li><a data-target="eauth">USDA eAuthentication</a></li>
                    </ul>
                </li>

                <li><a data-target="getstarted">Getting Started with the Vendor Application</a>
                    <ul>
                        <li><a data-target="reader">Adobe Reader</a> </li>
                        <li><a data-target="training">Training</a></li>
                    </ul>
                </li>
                <li><a data-target="solicit">Solicitations for Resources</a>
                    <ul>
                        <li><a data-target="generics">Generic Solutions</a></li>
                        <li><a data-target="amendments">Amendments</a></li>
                        <li><a data-target="inspections">Inspections</a></li>
                </li>
                <li><a data-target="agreements">Agreements for Resources</a>
                    <ul>
                        <li><a data-target="ibpas">I-BPAs / EERAs</a></li>
                        <li><a data-target="trainqual">Training Qualifications</a></li>
                        <li><a data-target="mods2agree">Modifications to Agreements</a></li>                      <li><a data-target="converted">Converted Agreements and Resources</a></li>
                    </ul>
                </li>
                <li><a data-target="dispatch">Dispatch</a>
                    <ul>
                        <li><a data-target="dpl">Dispatch Priority Lists</a></li>
                    </ul>
                </li>
                <li><a data-target="help">Help with the Vendor Application</a> </li>
            </ul>

        </div>
    </div>
</div>


<?php include_once '../partials/pageEnd.php'; ?>