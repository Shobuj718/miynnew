
@section('styles')
<style type="text/css">
  input[type="text"]{
    height: 20px;
    vertical-align: top;
  }
  .field_wrapper div{
    margin-bottom: 10px;
  }
  .add_button{
    margin-top: 10px;margin-left: 10px;vertical-align: text-bottom;
  }
  .remove_button{
    margin-top: 10px;
    margin-left: 10px;
    margin-right: 10px;
    vertical-align: text-bottom;
  }
</style>
@endsection

<div class="modal fade" id="service_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h4 class="modal-title">New Staff Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                     <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Business hours</li>
                            <li>Staff members</li>
                            <li>Services</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset>
                            <!-- <img class="logo" src="{{ asset('/files/assets/images/miynlogo.png') }}" alt="miynlogo.png"> -->
                            <h5 class="fs-subtitle">Set up your business hours</h5>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">SUNDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">MONDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">TUESDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">WEDNESDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">THURSDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">FRIDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                  <a href="javascript:void(0)"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px; margin-top: 12px;">SATURDAY</h6></a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">9:00am</option>
                                      <option value="editor">6:30am</option>
                                      <option value="writter">7:00am</option>
                                      <option value="writter">7:30am</option>
                                      <option value="writter">8:00am</option>
                                      <option value="writter">8:30am</option>
                                      <option value="writter">9:00am</option>
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-1">
                                <div class="form-group">
                                  <h6 style="margin-top: 12px;">to</h6>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="staff_role" id="staff_role">
                                      <option value="user">5:00pm</option>
                                      <option value="editor">2:30pm</option>
                                      <option value="editor">3:00pm</option>
                                      <option value="editor">3:30pm</option>
                                      <option value="editor">4:00pm</option>
                                      <option value="editor">4:30pm</option>
                                      <option value="editor">5:00pm</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <button type="button" name="next" class="btn btn-primary next" value="Next">Next</button>
                        </fieldset>
                        <fieldset class="">
                            <h5 class="fs-subtitle">Get your staff onboard</h5>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" name="onboard_staff_name[]" class="form-control" placeholder="Staff name">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input type="text" name="onboard_staff_email[]" class="form-control" placeholder="Staff email">
                                </div>
                              </div>
                            </div>
                            <div class="field_wrapper">
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <a href="javascript:void(0)" class="add_button"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px;">ADD NEW STAFF MEMBER</h6></a>
                              </div>
                              
                          </div>
                            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous" value="Previous">Previous</button>
                            <button type="button" name="next" class="btn btn-primary next" value="Next">Next</button>
                        </fieldset>
                        <fieldset>
                            <h5 class="fs-subtitle">Add your business’s services to your Service Menu</h5>

                             <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <input type="text" name="service_name[]" class="form-control" placeholder="Service name">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <select class="form-control" name="service_duration[]" id="service_duration">
                                      <option value="">Duration</option>
                                      <option value="user">15 minutes</option>
                                      <option value="user">30 minutes</option>
                                      <option value="user">45 minutes</option>
                                      <option value="user">1 hour</option>
                                      
                                  </select>
                                </div>
                              </div>
                               <div class="col-md-3">
                                <div class="form-group">
                                 <input type="text" name="service_price[]"  class="form-control" placeholder="Service price">
                                </div>
                              </div>
                            </div>

                            <div class="field_wrapper2">
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <a href="javascript:void(0)" class="add_button2"><h6 style="background-color: #22afea;color: white;padding: 8px;border-radius: 16px;">ADD SERVICE</h6></a>
                              </div>
                              
                            </div>

                            <button type="button" name="previous" class="btn btn-inverse btn-outline-inverse previous" value="Previous">Previous</button>
                            <button type="submit" name="next" class="btn btn-primary submit" value="submit">Submit</button>
                        </fieldset>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                    <button type="button" onclick="submitContactForm()" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                </div> -->
            </div>
        </div>
</div>


    