<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BrainEdgeIndia.com</title>
    
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="css/icofont.min.css">
    
    <link rel="stylesheet" href="./css/master.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
</head>
<body>

    
              <!-- ++++++++++++++++++++++++++ Navbar section  +++++++++++++++ -->
              <div class=" bg-primary p-1">
                    <div class="p-0 m-0  row">
                  <div class=" col-8">
                      <p class="text-white-50 m-0">
                            <i class="icofont-ui-call"></i> +91-175 - 5015220  |  +91 - 98728 66205  <i class="ml-3 icofont-send-mail"></i>  Patiala@BrainEdgeIndia.com
            
                      </p>
            
                  </div>
                  <div class="col-4 text-right m-0">
                      <a href="#" class=" text-white-50 mr-3"><i class="icofont-facebook  "></i></a>
                      <a href="#" class=" text-white-50 mr-3"><i class="icofont-instagram "></i></a>
                      <a href="#" class=" text-white-50 mr-3"><i class="icofont-youtube-play"></i></a>
            
                  </div>
            
                    </div>
            
                </div>
            <nav class="navbar navbar-expand-lg shadow border-bottom sticky-top navbar-light bg-white">
                <div class=" container">
            
                
                    <a class="navbar-brand" href="#">
                        <img src="./images/logo-01.svg" class="w-50" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-right navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav  ml-md-auto ">
                          
                        <li class="nav-item mr-3">
                          <a class="nav-link" href="index.html">Home </a>
                        </li>
                        <li class="nav-item mr-3">
                                
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="results" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Admission </a>
                                
                                <div class="dropdown-menu" aria-labelledby="results">
                                  <a class="dropdown-item" href="#!">GRE</a>
                                  <a class="dropdown-item" href="#!">SAT</a>
                                  <a class="dropdown-item" href="#!">ACT</a>
                                  <a class="dropdown-item" href="#!">IELTS</a>
                                  <a class="dropdown-item" href="#!">TOEFL</a>
                                </div>
                              </div>
                    </li>
                       
                       
                    <li class="nav-item mr-3">
                                
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="results" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Study Abroad </a>
                            
                            <div class="dropdown-menu" aria-labelledby="results">
                              <a class="dropdown-item" href="#!">CANADA</a>
                              <a class="dropdown-item" href="#!">USA</a>
                              <a class="dropdown-item" href="#!">AUSTRALIA</a>
                              <a class="dropdown-item" href="#!">IRELAND</a>
                              <a class="dropdown-item" href="#!">UK</a>
                            </div>
                          </div>
                </li>
                     <li class="nav-item mr-3">
                                <a class="nav-link" href="result.html">Results </a>
                        </li>
            
                        <li class="nav-item mr-3">
                                <a class="nav-link" href="faq.html">Faq </a>
                        </li>
                        <li class="nav-item mr-3">
                                <a class="nav-link" href="contact.html">Contact </a>
                        </li>
                      </ul>
                    
                    </div>
                </div>
                  </nav>
            
            
                  <!--  ++++++++++++++++++++++++++++++ End of navbar section ++++++++++++++++++++++++++ -->

                  <!-- +++++++++++++++++++++++++++++ body content  ++++++++++++++++++++++++++++-->
        <div class=" container ">
         
          <div class=" row p-0 m-0  mb-4">
 <div class=" slider py-4">
            <img src="./images/slider-01.jpg" class="rounded  shadow-lg  img-fluid w-100" alt="">

          </div>
          <div class=" col-12    p-2 rounded  my-2">
            <div class=" row">
              <div class=" col-4">
                <div class=" ">

                
               
               <select name="course-filter" onchange="courseFilter()" class=" form-control form-control-sm" aria-placeholder="Select Courses" id="course-filter">
                 <option value="" class="disabled">Select Courses</option>
                 <option value="">All</option>
                 <option value="GRE">GRE</option>
                 <option value="SAT">SAT</option>
                 <option value="ACT">ACT</option>
                 <option value="IELTS">IELTS</option>
                 <option value="TOEFL">TOEFL</option>

               </select>
              </div>
            </div>
              <div class=" col-4">
                 
                  <select name="visa-filter" class=" form-control form-control-sm" aria-placeholder="Select Courses" id="visa-filter">
                      <option value="">Select Visa Type</option>
                      <option value="tourist visa">Tourist Visa</option>
                      <option value="study visa">Study Visa</option>
                     
     
                    </select>
                
              </div>
              <div class="col-4 text-right">
                <span class=" font-weight-bold text-black-50 " id="filter-text">All Results</span>
              </div>
            </div>
            <hr>

            </div>
        
            <!-- <div class=" col-3 pl-0">
             
                <div class="list-group  ">
                    <a href="#!" class="list-group-item disabled bg-primary text-white font-weight-bold">Admission</a>
                    <a href="#!" class="list-group-item list-group-item-action">All</a>
                    <a href="#!" class="list-group-item list-group-item-action">GRE</a>
                    <a href="#!" class="list-group-item list-group-item-action">SAT</a>
                    <a href="#!" class="list-group-item list-group-item-action">ACT</a>
                    <a href="#!" class="list-group-item list-group-item-action">IELTS</a>
                    <a href="#!" class="list-group-item list-group-item-action">TOEFL</a>
                    
                  </div>

                 
                    <div class="list-group mt-4 ">
                        <a href="#!" class="list-group-item disabled bg-primary text-white font-weight-bold">Visa</a>
                        <a href="#!" class="list-group-item list-group-item-action">Study Visa</a>
                        <a href="#!" class="list-group-item list-group-item-action">Tourist Visa</a>
              
                        
                      </div>
                  
            </div> -->
          
            <div class=" col-12">
             
              <div class="row ">

                <!-- Result card -->
                <div class="col-3 p-1 m-0">
                   <div class=" border result-card rounded w-100 " style=" overflow:hidden;">
                     <img src="./images/result-card.jpg" class="w-100" alt="">
                     <div class=" p-1">
                       <p class="font-weight-bold ">
                         Admission open Medicine hat college (Alberta)
                       </p>
                    
                       <p class=" blockquote-footer">
                         January Intake - 2020
                       </p>
                     </div>
                   </div>
              </div>

              <!-- end of result card -->

               <!-- Result card -->
               <div class="col-3 p-1 m-0">
                  <div class=" border result-card rounded w-100 " style=" overflow:hidden;">
                    <img src="./images/result-card.jpg" class="w-100" alt="">
                    <div class=" p-1">
                      <p class="font-weight-bold ">
                        Admission open Medicine hat college (Alberta)
                      </p>
                   
                      <p class=" blockquote-footer">
                        January Intake - 2020
                      </p>
                    </div>
                  </div>
             </div>

             <!-- end of result card -->

              <!-- Result card -->
              <div class="col-3 p-1 m-0">
                  <div class=" border result-card rounded w-100 " style=" overflow:hidden;">
                    <img src="./images/result-card.jpg" class="w-100" alt="">
                    <div class=" p-1">
                      <p class="font-weight-bold ">
                        Admission open Medicine hat college (Alberta)
                      </p>
                   
                      <p class=" blockquote-footer">
                        January Intake - 2020
                      </p>
                    </div>
                  </div>
             </div>

             <!-- end of result card -->

                  <!-- Result card -->
                  <div class="col-3 p-1 m-0">
                      <div class=" border result-card rounded w-100 " style=" overflow:hidden;">
                        <img src="./images/result-card.jpg" class="w-100" alt="">
                        <div class=" p-1">
                          <p class="font-weight-bold ">
                            Admission open Medicine hat college (Alberta)
                          </p>
                       
                          <p class=" blockquote-footer">
                            January Intake - 2020
                          </p>
                        </div>
                      </div>
                 </div>
    
                 <!-- end of result card -->

            </div>
          </div>

        </div>
        </div>


                  <!-- ++++++++++++++++++++++++++++- End of body content +++++++++++++++++++ -->
            

                  
      <!-- ++++++++++++++++++++++++ Contact section +++++++++++++++++ -->
      <div class=" p-3 bg-dark">
            <div class=" container contect-container">
    
            
            <div class=" row p-2">
              <div class=" col-4">
                <h3 class=" text-white">About BrainEdge</h3>
                <p style=" line-height:initial; font-size:0.8rem;" class=" text-white-50">
                    BrainEdge Education Private Limited is a company founded by visionaries who are graduates 
                    from Indian Institute of Management Kozhikode(IIMK), University of Texas Houston USA , 
                    Thapar University (TU) , Indian Institute of Technology,Delhi (IIT-D).All of them have 
                    one vision in mind to impart quality education and be a leader in the field of education
    
                    <a href="#!About" class=" text-danger">Read More....</a>
    
                </p>
              </div>
    
    
              <div class=" col-2 ">
                  <h6 class=" text-white">Admission</h6>
    
                  <ul style=" list-style-type: none;"  class="p-0">
                    <li> 
                      <a href="#" class=" text-white-50">GRE</a>
                    </li>
                    <li> 
                        <a href="#" class=" text-white-50">SAT</a>
                      </li>
                      <li> 
                          <a href="#" class=" text-white-50">ACT</a>
                        </li>
                      <li> 
                          <a href="#" class=" text-white-50">IELTS</a>
                        </li>
                        <li> 
                            <a href="#" class=" text-white-50">TOEFL</a>
                          </li>
                  </ul>
      
                </div>
    
                <div class=" col-2">
                    <h6 class=" text-white">Study Abroad</h6>
                    <ul style=" list-style-type: none;"  class="p-0">
                      <li> 
                        <a href="#" class=" text-white-50">CANADA</a>
                      </li>
                      <li> 
                          <a href="#" class=" text-white-50">USA</a>
                        </li>
                        <li> 
                            <a href="#" class=" text-white-50">AUSTRALIA</a>
                          </li>
                        <li> 
                            <a href="#" class=" text-white-50">IRELAND</a>
                          </li>
                      
                    </ul>
        
                  </div> <div class=" col-4">
                    <h6 class=" text-white">Contact</h6>
                    <ul style=" list-style-type: none;" class="p-0">
                      <li class=" text-white-50 mb-2"> 
                        +91-175 - 5015220
                      </li>
                      <li class=" text-white-50 mb-2"> 
                        +91 - 98728 66205
                      </li>
                      <li class=" text-white-50 mb-2"> 
                       Patiala@BrainEdgeIndia.com
                      </li>
                      <li class=" text-white-50 mb-2">
                        SCO – 29, First Floor, City Centre,Near 22 No. Phatak, Patiala – 147001
                      </li>
                      
                    </ul>
        
                  </div>
            </div>
          
          </div>
          <footer class=" text-center text-white-50 text-muted" style=" font-size:0.8rem;">
              &copy; copyrights all right reserved 2018-19 brainedgeindia.com 
            </footer>
          </div>



          <script src="./js/master.js"></script>
      
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>