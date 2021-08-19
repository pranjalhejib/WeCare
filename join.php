<!-- section -->
<section class="my-5" id="join">
    <!-- join us -->
    <div class="py-4">
        <h2 class="text-center">Join Us</h2>
    </div>
    <div class="w-50 m-auto">
        <div class="jumbotron bg-dark text-light">
        <form action="connect.php" method="POST">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="firstname" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lastname" maxlength="20" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="emailid" maxlength="50" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="contact" maxlength="20" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Your Comments</label>
                <textarea name="comments" maxlength="100" class="form-control"></textarea>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-light">Submit</button>
            </div>
        </div>
        </form>
    </div>
</section>