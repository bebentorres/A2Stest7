@extends('layout.app')

@section('content')
    <div class="container" id="categories2">
        <h3>Search by Category</h3>
        <div id="categoryCards">
            <div class="card">
                <h4>IT & Development</h4>
            </div>
            <div class="card">
               <h4>Design & Creative</h4>
            </div>
            <div class="card">
                <h4>Sales and Marketing<h4>
            </div>
            <div class="card">
                <h4>Writing & Translation<h4>
            </div>
            <div class="card">
                <h4>Admin & Support<h4>
            </div>
            <div class="card">
                <h4>Finance & Accounting<h4>
            </div>
            <div class="card">
                <h4>Engineering <br>& Architecture<h4>
            </div>
            <div class="card">
                <h4>Legal<h4>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="searchbar">
        <div class="container" id="search">
            <input id="search1" type="text" placeholder="search jobs, keyword, company, etc">
            <input id="search2" type="text" placeholder="location, area, city">
            <input id="search3" type="text" placeholder="specialization">
            <button class="orangebutton regular" onclick="searchbar.search();">Search <i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>

    <div class="container" id="search-result">
        <div class="row">
            <div class="col-md-3" id="filter">
                <h2>Filter Jobs</h2>
                <div>
                    <h3>Salary</h3>
                    <input type="checkbox" id="sahod-0">
                    <label>PHP 0 - PHP <span>14999</span></label><br>
                    <input type="checkbox" id="sahod-1">
                    <label>PHP 15000 - PHP <span>29999</span></label><br>
                    <input type="checkbox" id="sahod-2">
                    <label>PHP 30000 - PHP <span>59999</span></label><br>
                    <input type="checkbox" id="sahod-3">
                    <label>PHP <span>60000</span> - up</label>
                    <button class="orangebutton regular form-control" onclick="salaryFilter();">Filter By Salary</button>
                </div>
                <div id="jobSetup">
                    <h3>Job Setup</h3>
                    <input type="checkbox" id="wfh">
                    <label>Work from Home</label><br>
                    <input type="checkbox" id="office">
                    <label>Office-based</label><br>
                    <input type="checkbox" id="hybrid">
                    <label>Hybrid</label>
                    <button class="orangebutton regular form-control" onclick="jobSetup();">Filter By Setup</button>
                </div>
                <div>
                    <h3>Job Nature</h3>
                    <input type="checkbox" id="full-time">
                    <label>Full-time</label><br>
                    <input type="checkbox" id="part-time">
                    <label>Part-time</label><br>
                    <input type="checkbox" id="project-based">
                    <label>Project-based</label><br>
                    <input type="checkbox" id="freelance">
                    <label>Freelance</label><br>
                    <button class="orangebutton regular form-control" onclick="jobNature();">Filter by Nature</button>
                </div>  
            </div>
            <div class="col-md-9" id="jobresults">

                <div class="search-jobcards" id="engineer-0">
                    <div id="jobresult-logo">
                        <div>
                            <h2>Engineer</h2>
                            <a href="companyoverview.html" class="jobs-link"><h3>Company XYZ</h3></a>
                            <br>
                            <p>National Capital Region (NCR)</p>
                            <p>around PHP <span class= "salary">30000</span></p>
                            <h4><i class="fa-solid fa-briefcase"></i> Min. 1 year exp</h4>
                            <h4><i class="fa-solid fa-book-open"></i> Bachelor/College Degree in Engineering</h4>
                            <div id="tags">
                                <label>tags:</label>
                                <button class="graybutton regular">project-based</button>
                                <button class="graybutton regular office">work-from-home</button>
                                <button class="graybutton regular">Engineering & Architecture</button>
                            </div>
                        </div>
                    </div>
                    <div id="jobresult-btn">
                        <a href="jobpost.html"class="orangebutton regular nlw">Apply</a>
                    </div>
                </div>

                <div class="search-jobcards" id="engineer-1" >
                    <div id="jobresult-logo">
                        <div>
                            <h2>Engineer IV</h2>
                            <a href="companyoverview.html" class="jobs-link"><h3>Company XYZ</h3></a>
                            <br>
                            <p>Visayas</p>
                            <p>around PHP <span class= "salary">80000</span></p>
                            <h4><i class="fa-solid fa-briefcase"></i> Min. 1 year exp</h4>
                            <h4><i class="fa-solid fa-book-open"></i> Bachelor/College Degree in Engineering</h4>
                            <div id="tags">
                                <label>tags:</label>
                                <button class="graybutton regular">full-time</button>
                                <button class="graybutton regular">office-based</button>
                                <button class="graybutton regular">Engineering & Architecture</button>
                            </div>
                        </div>
                    </div>
                    <div id="jobresult-btn">
                        <a href="jobpost.html"class="orangebutton regular nlw">Apply</a>
                    </div>
                </div>

                <div class="search-jobcards" id="engineer-2">
                    <div id="jobresult-logo">
                        <div>
                            <h2>Engineer II</h2>
                            <a href="companyoverview.html" class="jobs-link"><h3>Company XYZ</h3></a>
                            <br>
                            <p>Mindanao</p>
                            <p>around PHP <span class= "salary">50000</span></p>
                            <h4><i class="fa-solid fa-briefcase"></i> Min. 1 year exp</h4>
                            <h4><i class="fa-solid fa-book-open"></i> Bachelor/College Degree in Engineering</h4>
                            <div id="tags">
                                <label>tags:</label>
                                <button class="graybutton regular">full-time</button>
                                <button class="graybutton regular">hybrid</button>
                                <button class="graybutton regular">Engineering & Architecture</button>
                            </div>
                        </div>
                    </div>
                    <div id="jobresult-btn">
                        <a href="jobpost.html"class="orangebutton regular nlw">Apply</a>
                    </div>
                </div>

                <div class="search-jobcards" id="engineer-3">
                    <div id="jobresult-logo" >
                        <div>
                            <h2>Accountant</h2>
                            <a href="companyoverview.html" class="jobs-link"><h3>Company XYZ</h3></a>
                            <br>
                            <p>Visayas</p>
                            <p>around PHP <span class= "salary">35000</span></p>
                            <h4><i class="fa-solid fa-briefcase"></i> Min. 1 year exp</h4>
                            <h4><i class="fa-solid fa-book-open"></i> Bachelor/College Degree in Accountancy</h4>
                            <div id="tags">
                                <label>tags:</label>
                                <button class="graybutton regular">full-time</button>
                                <button class="graybutton regular">office-based</button>
                                <button class="graybutton regular">Finance & Accounting</button>
                            </div>
                        </div>
                    </div>
                    <div id="jobresult-btn">
                        <a href="jobpost.html"class="orangebutton regular nlw">Apply</a>
                    </div>
                </div>

                <div class="search-jobcards" id="engineer-4">
                    <div id="jobresult-logo" >
                        <div>
                            <h2>Jr. Accountant</h2>
                            <a href="companyoverview.html" class="jobs-link"><h3>Company XYZ</h3></a>
                            <br>
                            <p>National Capital Region (NCR)</p>
                            <p>around <span class= "salary">20000</span></p>
                            <h4><i class="fa-solid fa-briefcase"></i> Min. 1 year exp</h4>
                            <h4><i class="fa-solid fa-book-open"></i> Bachelor/College Degree in Accountancy</h4>
                            <div id="tags">
                                <label>tags:</label>
                                <button class="graybutton regular">full-time</button>
                                <button class="graybutton regular">office-based</button>
                                <button class="graybutton regular">Finance & Accounting</button>
                            </div>
                        </div>
                    </div>
                    <div id="jobresult-btn">
                        <a href="jobpost.html"class="orangebutton regular nlw">Apply</a>
                    </div>
                </div>

                <div class="search-jobcards" id="engineer-5">
                    <div id="jobresult-logo" >
                        <div>
                            <h2>Sr. Accountant</h2>
                            <a href="companyoverview.html" class="jobs-link"><h3>Company XYZ</h3></a>
                            <br>
                            <p>National Capital Region (NCR)</p>
                            <p>around <span class= "salary">45000</span></p>
                            <h4><i class="fa-solid fa-briefcase"></i> Min. 1 year exp</h4>
                            <h4><i class="fa-solid fa-book-open"></i> Bachelor/College Degree in Accountancy</h4>
                            <div id="tags">
                                <label>tags:</label>
                                <button class="graybutton regular">full-time</button>
                                <button class="graybutton regular">office-based</button>
                                <button class="graybutton regular">Finance & Accounting</button>
                            </div>
                        </div>
                    </div>
                    <div id="jobresult-btn">
                        <a href="jobpost.html"class="orangebutton regular nlw">Apply</a>
                    </div>
                </div>

                <div class="search-jobcards" id="engineer-6">
                    <div id="jobresult-logo">
                        <div>
                            <h2>Admin Staff</h2>
                            <a href="companyoverview.html" class="jobs-link"><h3>Company XYZ</h3></a>
                            <br>
                            <p>National Capital Region</p>
                            <p>around <span class= "salary">30000</span></p>
                            <h4><i class="fa-solid fa-briefcase"></i> Min. 1 year exp</h4>
                            <h4><i class="fa-solid fa-book-open"></i> Bachelor/College Degree related</h4>
                            <div id="tags">
                                <label>tags:</label>
                                <button class="graybutton regular">full-time</button>
                                <button class="graybutton regular">office-based</button>
                                <button class="graybutton regular">Admin & Support</button>
                            </div>
                        </div>
                    </div>
                    <div id="jobresult-btn">
                        <a href="jobpost.html"class="orangebutton regular nlw">Apply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
@endsection