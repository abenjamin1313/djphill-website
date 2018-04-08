<form id="form-validation" class="form-horizontal" action="form/submit.php" method="post" enctype="multipart/form-data"> 
    <div class="row">
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-4" for="name"><strong>NAME</strong></label>
            <div class="col-md-6 col-xs-6 col-sm-6">
               <input type="text" pattern="[a-zA-Z0-9\s]+" required name="name" id="name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-4" for="email"><strong>EMAIL</strong></label>
            <div class="col-md-6 col-xs-6 col-sm-6">                                
               <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required name="email" id="email" value="" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-4 col-sm-4 col-xs-4" for="inline-textarea"><strong>MESSAGE</strong></label>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <textarea pattern="[a-zA-Z0-9\s]+" required id="message" name="message" class="form-control" rows="4" placeholder=""></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col-sm-offset-3">
                <label for="submit">
                    <button type="submit" id="submit" class="btn btn-action btn-lg" value="send">SUBMIT <i class="gi gi-play"></i></button>
                </label>
            </div>
        </div>
    </div>      
</form>