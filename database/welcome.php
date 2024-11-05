<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Group 10 Team Profile</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif; 
            color: #fff;
            height: 100%; /* Set height to 100% */
        }

        body {
            display: flex; /* Flexbox layout */
            flex-direction: column; /* Column direction */
            background-color: #121212; 
        }

        header {
            display: flex;
            justify-content: space-between; /* Space between logo and button */
            align-items: center; /* Center vertically */
            background-color: #000;
            padding: 10px 20px; /* Add padding to the header */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        h1 {
            font-size: 36px;
            text-transform: uppercase;
            margin-top: 150px; /* Space below the fixed header */
            color: #ff7e5f; 
            letter-spacing: 2px;
        }

        hr {
            border: 1px solid #333;
            width: 50%;
        }

        .logo img {
            width: 150px; 
            height: auto; 
        }

        main {
            flex: 1; /* Allow main content to grow */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Center content vertically */
            margin-top: 150px; /* Space for fixed header */
        }

        .welcome-message {
            text-align: center;
            
            margin-bottom: 200px; /* Space below the header */
        }

        .nav-links {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .nav-links a {
            margin: 0 10px;
            padding: 10px 20px;
            background-color: #ff7e5f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #e76e51;
        }

        footer {
            padding: 10px 0;
            width: 100%;
            background-color: #000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="g10.jpg" alt="Logo"> <!-- Add your logo image here -->
        </div>
        <div class="nav-container">
            <!-- You can add additional navigation items here if needed -->
        </div>
    </header>

    <main>
        <div class="welcome-message">
            <h1>Welcome to Team Profile of Group 10</h1>
            <p>We are excited to share our team's profiles and projects with you!</p>
            <div class="nav-links">
                <a href="regis.php">Log in</a> <!-- Link to your team profile page -->
            </div>
        </div>
    </main>
    
    <footer>
        <p>&copy; 2024 Group 10 Team Profile</p>
    </footer>
    
</body>
</html>
