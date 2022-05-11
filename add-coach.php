<?php   
        global $page_title;
        $page_title ="Add Coach";

        include("head.php");
        
        require_once("config.php");
        require_once("app/class-add-coach-front.php");
?>

    <body>
    
    <?php include("header.php"); ?>

<?php
    if( isset($_POST["submit"]) ){
        $formData = $_POST["AddCoach"]; // dont forget to sanitize any post data
        $add_coach_front = new Add_Coach_Front();
        $add_coach_front->add_coach($formData);
    }
?>

    <div class="container-fluid">
    
        <div class="row">

        <?php include("navigation.php"); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4">

                <h1>Add Coach</h1>
                <form action="add-coach.php" method="post">
                    <div class="form-group mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="AddCoach[username]" placeholder="Username">
                    </div>                    
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="AddCoach[password]" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="AddCoach[email]" placeholder="Enter email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="first-name">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="AddCoach[first_name]" placeholder="First Name">
                    </div>                      
                    <div class="form-group mb-3">
                        <label for="last-name">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="AddCoach[last_name]" placeholder="Last Name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="gender">Gender</label>
                        <select id="gender" name="AddCoach[sex]" class="form-control">
                            <option disabled selected>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>                    
                    <div class="form-group mb-3">
                        <label for="date">Date of Birth</label>
                        <input type="date" class="form-control" id="date" name="AddCoach[dob]">
                    </div>                    
                    <div class="form-group mb-3">
                        <label for="telephone">Telephone Number</label>
                        <input type="text" class="form-control" id="telephone" name="AddCoach[telephone]" pattern="[0-9]{11}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="AddCoach[address]" placeholder="Address">
                    </div>
                    <div class="form-group mb-3">
                        <label for="postcode">Postcode</label>
                        <input type="text" class="form-control" id="postcode" name="AddCoach[postcode]" placeholder="Postcode">
                    </div>                    
                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>

            </main>

        </div>

    </div>


    <?php include("footer.php"); ?>
    </body>
</html>