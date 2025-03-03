<div class="container ">
    <h1 class="heading">Login</h1>
    <form method="get" action="./server/requests.php">
    <div class="col-6 offset-sm-3 margin-bottom-15">
        <label for="email" class="form-label">User Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"  >
    </div>
    
    <div class="col-6 offset-sm-3 margin-bottom-15" >
        <label for="password" class="form-label">User Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter a valid password">
    </div>
    <div>
    <button type="submit" class="btn btn-primary offset-sm-3 margin-bottom-15">login</button>
    </div>
    
    </form>
</div>