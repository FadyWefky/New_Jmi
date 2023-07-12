@extends('cpanel.layout')
@section('content')




    <div class="col-lg-9 col-md-12 col-sm-12 mainContent">
       <div class="panel panel-default">
            <div class="panel-heading">
                    <h4 class="panel-title">{{ $title}}</h4>
            </div>

            <div class="panel-body">

              <!--start content -->





    {!! Form::open(['url'=>'en/cpanel/add-account'])  !!}


        <hr />
        <div>




@if($user->country =='')
    <div class="alert alert-warning"  >
       To Open Account You Have To Complete Your <a href="/en/cpanel/profile">Profile</a>
    </div>


@endif

@if(count($documents)< 2)
    <div class="alert alert-warning"  id="live-alert--0-" style="display: none;">
       To Open Account You Must Have 2 Approved <a href="/en/cpanel/documents"> Documents</a> At Least Including Customer Account Agreement
    </div>

@endif

@if(count($documents)>1)
    @if($documents[0]->status==0 && $documents[1]->status==0)
        <div class="alert alert-warning "  id="live-alert--0-" style="display: none;">
           To Open Account You Must Have 2 Approved <a href="/en/cpanel/documents"> Documents</a> At Least Including Customer Account Agreement
        </div>
    @endif
@endif

@if(count($documents)>1)
<?PHP $x=0; ?>
    @foreach($documents as $document)
        @if($document->type==8)
        <?PHP $x=1; ?>
        @endif
    @endforeach
    @if($x==0)
            <div class="alert alert-warning "  id="live-alert--0-" style="display: none;">
               To Open Account You Must Have Approved Customer Account Agreement<a href="/en/cpanel/documents"> Documents</a>
            </div>
    @endif
@endif

@if (count($live_accounts)>99)
    <div class="alert alert-warning " id="live-alert" style="display: none;" >
       You have reached the maximum allowed number (3) of live accounts
    </div>
@endif



@if (session('status-success'))
    <div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status-success') }}
    </div>
@endif

@if (session('status-error'))
    <div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status-error') }}
    </div>
@endif

@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
         {{ $error }}
     </div>
    @endforeach
@endif





            <div class="col-sm-9">




                <br />

                <div class="row" id="account_type" >


                    <label class="col-sm-4">Account Type:</label>
                    <div class="col-sm-8">
                        <div class="controls">
                            <select class="form-control" name="account_type" id="account_type"    required>
                                <option value="" disabled selected >- Select -</option>
                                <option value="1">Individual</option>
                                <option value="2">IB</option>


                            </select>
                        </div>
                    </div>
                </div>

                <br />

                <div class="row" style-="display:none;">


                    <label class="col-sm-4">Account Group:</label>
                    <div class="col-sm-8">
                        <div class="controls">
                            <select class="form-control" name="account_group" id="account_group"    required >
                                <option value="" disabled selected >- Select -</option>
                                <option value="1" class="forlive" style-="display:none;">Fixed Spread Account </option>
                                <option value="5" class="forlive" style-="display:none;">Scalping Account</option>
                                <option value="3" class="forlive" style-="display:none;">Variable Spread Account</option>
                                <option value="4" class="forlive" style-="display:none;">Bonus Account</option>

                            </select>
                        </div>
                    </div>
                </div>

                <br />
                <div class="row">
                    <label class="col-sm-4">Currency base:</label>
                    <div class="col-sm-8">
                        <div class="controls">
                            <select class="form-control" name="currency" id="currency"   required >
                                <option value="1"selected >USD</option>
                            </select>
                        </div>
                    </div>
                </div>



                <br />
                <div class="row" id="login">
                    <label class="col-sm-4">MT4 Login User:</label>
                    <div class="col-sm-8">
                        <div class="controls">
                            <input type="number" class="form-control" name="account_id" id="account_id" required />

                        </div>
                    </div>
                </div>

                <br />
                <div class="row" id="login">
                    <label class="col-sm-4">MT4 Login Password:</label>
                    <div class="col-sm-8">
                        <div class="controls">
                          <input type="password" class="form-control" name="password" id="password" required />

                        </div>
                    </div>
                </div>

                <br />
                <div class="row">
                    <label class="col-sm-4"></label>
                    <div class="col-sm-8 ">
                        <div class="controls">
                          <input type="number" class="form-control" name="account_radio_type" value="1" required style="display:none;"/>

                             <input class="btn btn-success form-control" type="submit" id="submit" value="Add Account" />

                        </div>
                    </div>
                </div>
            {!! Form::close() !!}



               </div>


               <script>

               $('a.btn-success').click(function(){
               $('table').css({
                  "border":"unset"
               });
               $("a.btn-success").text("Select Now");
               $("a.btn-success").css({
                  "border-color": "#ffc926",
                  "background":"#ffc926"
               });

               $(this).closest('table').css({
                  "border":"2px solid #0059b2"
               });
               $(this).text("Selected");
               $(this).css({
                  "border-color": "#0059b2",
                  "background":"#0059b2"
               });
               $("#account_group").val($(this).attr('val'));
               });

               </script>



        </div>


    </div>

</div>

<br>






            <!--End content-->
            </div>
        </div>

    </div>


@stop
