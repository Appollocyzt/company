  <div class="container">
       <h3>Send Your Message</h3>
          <div class="row">
               <div class="col-lg-6">
                   <form class="form-vertical" role="form" method="post" action="{{ route('contact') }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                             <label for="email" class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" id="email">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Email</label>
                                 <input type="text" name="email" class="form-control" id="email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  @endif
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Phone Number</label>
                                 <input type="text" name="phone" class="form-control" id="phone">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                         </div>
                           <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Subject</label>
                                 <input type="text" name="subject" class="form-control" id="subject">

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                        </div>
                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                <label for="message" class="control-label">Message</label>
                                   <textarea placeholder="enter message" name="message" class="form-control" rows="4">
                                   </textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                      </div>
                            <div class="form-gorup">
                                <button type="submit" class="btn btn-success">Send</button>
                         </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}" >
                </form>
        </div>
      </div>
</div>