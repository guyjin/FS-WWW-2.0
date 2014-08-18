<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>U.S. Forest Service - Business Operations, Incident Procurement</title>
  <base href="/business/2/proto1/">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/base.js"></script>
<!--[if lte IE 9]>
<link rel="stylesheet" href="css/oldIE.css">
<![endif]-->
</head>
<body lang="en" class="inc">
  <div class="flexcontainer">
    <div class="sidebar">
      <header class="header">
        <div class="shield">
          <img src="img/shield.png" alt="image of the U.S. Forest Service Badge/Logo" />
        </div>
        <div class="usfs">U.S. Forest Service</div>
      </header>
      <nav role="navigation">
        <ul role="menu">
          <li role="presentation"><a href="index.php" role="menuitem" tabindex="1" id="homeLink" class="topLevelLink">Home</a></li>
          <li role="presentation"><a href="abs/index.php" role="menuitem" tabindex="2" id="absLink" class="topLevelLink">Aviation Business System</a>
          </li>
          <li role="presentation"><a href="grants/index.php" role="menuitem" tabindex="3" id="gaLink" class="topLevelLink">Grants &amp; Agreements</a></li>
          <li role="presentation"><a href="incident/index.php" role="menuitem" tabindex="4" id="incLink" class="topLevelLink">Incident Procurement</a>
            <ul class="subnavList">
                <li>
                    <a href="abs/" class="subnav">
                        Aviation Business System
                    </a>
                </li>
                <li>
                    <a href="incident/vendors.php" class="subnav">Being a Vendor</a>
                </li>
                <li>
                    <a href="incident/buyingteam.php" class="subnav">Buying Team</a>
                </li>
                <li>
                    <a href="incident/teamtoolkit.php" class="subnav">Buying Team Toolkit</a>
                </li>

                <li>
                    <a href="incident/communications.php" class="subnav">
                        Communications
                    </a>
                </li>
                <li>
                    <a href="incident/contacts.php" class="subnav">
                        Contacts
                    </a>
                </li>
                <li>
                    <a href="incident/entities.php" class="subnav">
                        Cooperating Entities
                    </a>
                </li>
                <li>
                    <a href="incident/fessaa.php" class="subnav">
                        FESSAA
                    </a>
                </li>
                <li>
                    <a href="incident/fire.php" class="subnav">
                        Fire/Other Resources
                    </a>
                </li>
                <li>
                    <a href="http://www.fs.fed.us/fire/contracting/" target="_blank" class="subnav">
                        National Contracts
                    </a>
                </li>
                <li>
                    <a href="incident/eera.php" class="subnav">
                        Preseason Agreement Information
                    </a>
                </li>
                <li>
                    <a href="incident/ref_reg.php" class="subnav">
                        References / Regulations
                    </a>
                </li>
                <li>
                    <a href="incident/agreementreports.php" class="subnav">
                        Regional Agreements &amp; Reports
                    </a>
                </li>
                <li>
                    <a href="incident/solicitations.php" class="subnav">Solicitations</a>
                </li>
                <li class="last">
                    <a href="incident/vipr.php" class="viprnav subnav">
                        VIPR
                    </a>
                </li>
                        <li>
                            <a href="incident/dispatchlookup.php" class="subnavChild">Dispatch
                                Center Lookup</a>
                        </li>
                        <li>
                            <a href="incident/dispatch.php" class="subnavChild">
                                Dispatch Priority Lists
                            </a>
                        </li>
                        <li>
                            <a href="incident/faq.php" class="subnavChild">FAQs</a>
                        </li>
                        <li>
                            <a href="incident/keyLinks.php" class="subnavChild">Key Links</a>
                        </li>

                        <li>
                            <a href="incident/eauth.php " class="subnavChild">USDA
                                eAuthentication</a>
                        </li>
                        <li>
                            <a href="<?php echo $web_root; ?>/incident/vendorapp.php" class="subnavChild">Vendor
                                Application</a>
                        </li>
                        <li>
                            <a href="incident/vendorsupport.php" class="subnavChild">Vendor
                                Support</a>
                        </li>
                        <li>
                            <a href="incident/vipragreements.php" class="subnavChild">
                                VIPR Preseason Agreements
                            </a>
                        </li>
                        <li>
                            <a href="incident/viprfinance.php" class="subnavChild">VIPR Finance
                                Copies</a>
                        </li>
                        <li class="last">
                            <a href="<?php echo $web_root; ?>/incident/viprreports.php" class="subnavChild">VIPR
                                Reports</a>
                        </li>
            </ul>
          </li>
          <li role="presentation"><a href="jobsoverview.php" role="menuitem" tabindex="5" id="jobsLink" class="topLevelLink">Jobs</a></li>
        </ul>
      </nav>
      <footer role="contentinfo">
        <a href="#" class="siteInfoLink" tabIndex="6">
          <span class="glyphicon glyphicon-cog"></span>
          Site &amp; Page details
        </a>
        <div class="siteDrawer">
          <ul>
            <li><a href="http://www.fs.fed.us/disclaimers.shtml">Disclaimers</a></li>
            <li><a href="http://www.fs.fed.us/privacy.shtml">Privacy Notice</a></li>
            <li><a href="http://www.fs.fed.us/im/foia/">Freedom of Information Act</a></li>
          </ul>
          <hr />
          <p class="address">
            USDA Forest Service<br>
            P.O. Box 96090<br>
            Washington , D.C. 20090-6090<br>
            (202) 205-8333
          </p>
          <hr />
          <a href="http://www.firstgov.gov/">FIRST GOV</a>
          <span class="siteDrawerHandle"><span id="siteDrawerHandleLabel">X</span>
          <span class="glyphicon glyphicon-remove"></span>
          <span class="glyphicon glyphicon-arrow-down"></span>
        </div>
      </footer>
    </div>
    <div class="content">
      <div class="titlebar" role="banner">
        Acquistion Management - Incident Procurement
      </div>
      <div class="main fullbg incibg" role="main">
        <div class="wideBlock">
          <p>Welcome to the Incident Procurement website serving our interagency partners and current or potential vendors. Please click on one of the portal links provided below so we can help you find what you are looking for.</p>

          <p>Find information about working with the Forest Service. If you're already a current Forest Service vendor, get information about the tools you need to use to manage your contracts.</p>
        </div>

        <div class="buttonBox"><a href="vendors.php" class="outlineBtn">Vendors</a></div>
      </div>
      <div class="wideBlock">
        <h2>Resources</h2>
          <a href="incident/contacts.php" class="section">Contacts
            <span class="caption">
              The Who's Who of Incident Procurement programs.
            </span>
          </a>
          <a href="incident/communications.php" class="section">Communications
          <span class="caption">
            The latest news and happenings in the world of Incident Procurement.
          </span>
          </a>
          <a href="incident/eera.php" class="section">
          Preseason Incident BPA
          <span class="caption">
            Agreements for preseason incident procurement.
          </span></a>
          <a href="inicdent/ref_reg.php" class="section">Regulations &amp; References
          <span class="caption">
            Every game has rules. These are ours.
          </span>
          </a>

      </div>
      <hr />
      <div class="wideBlock">
        <h2>Systems</h2>
          VIPR
          Incident Procurement System for preseason agreements and contracts.
          ABS
          Aviations Business Systems vendors can use this to authenticate aviation invoices.
      </div>

    </div>
  </div>

  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js">\x3C/script>')</script>
</body>
</html>