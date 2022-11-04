@extends('layout.app')

@section('content')
    
<div class="container" id="jpost">
  <div id="jpost-head">
      <h2>Position</h2>
      <h3>Company XYZ</h3>
      <br>
      <p>National Capital Region</p>
      <p>PHP 25, 000 - PHP 30, 000</p>
      <br>
      <p>Posted 3 days ago</p>
      <div id="jpost-appply">
          <a href="apply.html"class="orangebutton regular nlw">Apply Now</a>
      </div>
  </div>
  <div id="line-break"></div>
  <div id="jpost-jobdes">
      <h4>Job Description</h4>
      <br>
      <p>Rigorous Agent Training and Performance Evaluations Get You Results</p>
      <p>Escalation Calls Instantly Routed to Top-of-the Line Managers</p>
  </div id="jpost-company">
  <div id="line-break"></div>
  <div>
      <h4>Company Overview</h4>
      <br>
      <p>Operates through a two-tier strategy called the Successful Action Plan (SAP). With this plan, we combine offshore and U.S. talent delivering maximum efficiency for our clients. We are steadily evolving due to the increasing demand for global outsourcing. Some of the industries and areas of expertise include financial companies, online business markets, CPA, buying the sale, trial offers, straight offers and logistics.</p>
      <p>Globally competitive customer service-oriented organization that replies to the demands of
          business process outsourcing. Our company is one of the most trustworthy call centers in the Philippines and the U.S. Certified by the SEC in December 2005, we opened our doors to the first team of specialists in March 2006.</p>
  </div>
  <div id="line-break"></div>
  <a href="../#" class="jobs-link">More jobs from this employer</a>
  <div id="jpost-save">
      <button class="graybutton regular">Save this Post</button>
  </div>
  <a href="../#" class="jobs-link">Report this job ad</a>
</div>

@endsection