<?php
  $pageTitle = "Incident Procurement";
  $pageMenu = "incident";
  $bodyClass = "inc";
  include_once '../partials/pageStart.php';
?>

      <div class="section fullbg incibg" role="section">
        <div >
          <p>Welcome to the Incident Procurement website serving our interagency partners and current or potential vendors. Please click on one of the portal links provided below so we can help you find what you are looking for.</p>

          <p>Find information about working with the Forest Service. If you're already a current Forest Service vendor, get information about the tools you need to use to manage your contracts.</p>
        </div>

        <div class="buttonBox"><a href="incident/vendors.php" class="outlineBtn">Vendors</a></div>
      </div>
      <div class="section">
        <div>
          <h2>Resources</h2>
            <a href="incident/contacts.php" class="splot">Contacts
              <span class="caption">
                The Who's Who of Incident Procurement programs.
              </span>
            </a>
            <a href="incident/communications.php" class="splot">Communications
            <span class="caption">
              The latest news and happenings in the world of Incident Procurement.
            </span>
            </a>
            <a href="incident/eera.php" class="splot">
            Preseason Incident BPA
            <span class="caption">
              Agreements for preseason incident procurement.
            </span></a>
            <a href="incident/ref_reg.php" class="splot">Regulations &amp; References
            <span class="caption">
              Every game has rules. These are ours.
            </span>
            </a>
        </div>

      </div>
      <hr />
      <div class="section colorBlock colorBlock1">
        <div>
          <h2>Systems</h2>
            <a href="incident/vipr.php" class="splot">VIPR
              <span class="caption">Incident Procurement System for preseason agreements and contracts.</span></a>
            <a href="abs/index.php" class="splot">ABS
              <span class="caption">Aviations Business Systems vendors can use this to authenticate aviation invoices.</span></a></div>
      </div>


<?php include_once '../partials/pageEnd.php'; ?>