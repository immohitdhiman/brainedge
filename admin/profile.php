<?php
session_start();
$sessionName = $_SESSION['name'];

?>

<div class=" profile-cover  " style=" height:300px;  overflow: hidden; 
            background: url('https://images.unsplash.com/photo-1569025591510-a69144e20084?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            ">

            </div>
            <div class="  row profile-picture-container px-4 m-0">
                <div class=" profile-picture col-3 bg-white p-2 p-0" style="
                    border-radius: 10px;
                    overflow: hidden;
                    ">
                    <img src="https://images.pexels.com/photos/19677/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class=" w-100 rounded" alt="">

                </div>
            </div>
            <div class=" profile-text px-4">
                <h3 class=" text-black">BrainEdge Education Private Limited</h3>
                <a href="#!" class=" text-black-50 p-0 m-0">Edit Profile</a>
                <hr>

                <div class=" row p-0 m-0">
                    <div class="col-6">
                      <table class="table-borderless table-hover table-sm w-100">
                          <tr>
                              <td class="w-25">
                                  <strong>Username </strong>
                              </td>
                             
                              <td>
                              <?php echo $sessionName ?>
                              </td>
                          </tr>

                          <tr>
                              <td>
                                  <strong>
                                      Email
                                  </strong>
                              </td>
                              
                              <td>
                                  patiala@brainedgeindia.com
                              </td>
                          </tr>

                          <tr>
                              <td>
                                  <strong>
                                      Phone
                                  </strong>
                              </td>
                              
                              <td>
                                    +91-175 - 5015220
                              </td>
                          </tr>

                          <tr>
                              <td>
                                  <strong>
                                      Mobile
                                  </strong>
                              </td>
                              
                              <td>
                                    +91 - 98728 66205
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <strong>
                                      Address
                                  </strong>
                              </td>
                              <td class="small">
                                    SCO – 29, First Floor, City Centre,Near 22 No. Phatak, Patiala – 147001
                              </td>
                          </tr>
                      </table>
                    </div>



                </div>
            </div>