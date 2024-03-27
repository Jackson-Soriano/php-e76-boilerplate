<nav class="navbar bg-dark text-success">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">ReviewsApp</a>
    <div class="d-flex ">  
  
        <h5 class="me-5 mb-0 ">Welcome username!</h5>
        <a href="process.php">Sign out</a>

        <h5 class="me-5 mb-0 ">Sign in to leave a review</h5>
        <a href="process.php">Sign in</a>

    </div>
  </div>
</nav>

<div class="container">
    <h1>The Theory of Evolution</h1>
    <p>According to the theory, individuals with traits that enable them to adapt to their environments will help them survive and have more offspring, which will inherit those traits. Individuals with less adaptive traits will less frequently survive to pass them on. Over time, the traits that enable species to survive and reproduce will become more frequent in the population and the population will change, or evolve, according to BioMed Central. Through natural selection, Darwin suggested, genetically diverse species could arise from a common ancestor. </p>

    <h3>Leave a Review</h3>
    <form action="process.php" method="POST" class="form-floating ">
        <textarea class="form-control" name="review" placeholder="Leave a comment here" style="height: 100px"></textarea>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary mt-1" name="add_review" value="Post a review">
        </div>
    </form>

    <h3><a href="login.php">Sign in</a> to leave a review </h3>
    

    <div>

        <h5>first_name last_name (datereview)</h5>
        <p>content</p>
        
        <div class="ms-5">

            <h6>first_name last_name (datereply)</h6>
            <p>replycontent</p>

            <form action="process.php" method="POST" class="form-floating">
                <input type="hidden" name="review_id" value="reviewid">
                <textarea class="form-control" name="reply" placeholder="Leave a comment here" style="height: 80px"></textarea>
                <div class="d-flex justify-content-end">
                    <input type="submit" class="btn btn-success mt-1" name="add_reply" value="Reply">
                </div>
            </form>

        </div>

    </div>
</div>


