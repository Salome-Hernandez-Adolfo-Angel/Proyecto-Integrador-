<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap-5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome-free/css/all.css">
    <title>Document</title>
</head>

<body>
    <?php 
    include("./views/sidebar.php");
    ?>
    <div class="home-section">
        <div class="container-xl shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 5%;">
            <h1 class="text-center mb-3 text-info">Contact Me</h1>
            <form action="#">
                <div class="row mb-1">
                    <div class="col">
                        <label class="form-label">First Name</label>
                        <input type="text" name="firstName" class="form-control" placeholder="First name"
                            aria-label="First name" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lastName" class="form-control" placeholder="Last name"
                            aria-label="Last name" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email"
                            aria-label="Email" required>
                    </div>
                    <div class="col">
                        <label class="form-label">Phone (optional)</label>
                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                            aria-label="Phone">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Subject"
                            aria-label="Subject" required>
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col">
                        <label class="form-label">Message</label>
                        <textarea type="text" name="message" class="form-control" placeholder="Message"
                            aria-label="Message" required></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
    <script src="../bootstrap-5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
</body>

</html>