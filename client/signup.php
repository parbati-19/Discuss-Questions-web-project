<div class="container ">
    <h1 class="heading">Sign Up</h1>
    <form method="Post" action="./server/requests.php">
    <div class=" col-6 offset-sm-3 margin-bottom-15">
        <label for="username" class="form-label">User Name</label>
        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your fullname" >
        
    </div>
    <div class="col-6 offset-sm-3 margin-bottom-15">
        <label for="email" class="form-label">User Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"  >
        
    </div>
    <div class="col-6 offset-sm-3 margin-bottom-15" >
        <label for="address" class="form-label">User Address</label>
        <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address">
    </div>
    <div class="col-6 offset-sm-3 margin-bottom-15" >
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter a valid password">
    </div>
    <div class="col-6 offset-sm-3 margin-bottom-15">
    <button type="submit" name="signup" class="btn btn-primary">Submit</button>
    </div>
    
    </form>
</div>