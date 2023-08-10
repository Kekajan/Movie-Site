<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact Us</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <!-- <link rel="stylesheet" href="contact.css" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .btn-submit {
            float: right;
        }
    </style>

</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5 pb-5 mt-130" >
        <h2 class="fw-bold pt-5 pb-3">Contact Us</h2>
        <form action="#" method="POST" class="pb-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject:</label>
                        <select class="form-select" id="subject" name="subject" required>
                            <option value="" disabled selected>Select your subject</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Support">Advertising opportunity</option>
                            <option value="Feedback">Movie distribution and exhibition</option>
                            <option value="Feedback">Corporate Booking</option>
                            <option value="Feedback">Customer feedback</option>
                            <option value="Feedback">Others</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-submit">Submit</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
    <script src='main.js'></script>
</body>

</html>