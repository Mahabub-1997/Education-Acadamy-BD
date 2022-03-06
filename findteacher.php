<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="styleo.css">
    
</head>
<body>
    <div>
        <h1>Search Teachear List</h1>
        
    </div>
    <div class="container">
    <input type="text" name="search" id="search" placeholder="search teacher name..." >
    </div>
    
    <table>
        <thead>
    <tr>
        <td>Teacher Name</td>
        <td>Subject</td>
        <td>Email</td>
    </tr>
    </thead>
    <tbody></tbody>
    <tr>
        <td>Alex Jeson</td>
        <td>Technology </td>
        <td>SMB Cybersecurity Safety</td>
    </tr>
    <tr>
        <td>jason winter</td>
        <td>Security </td>
        <td>Protect Mobile Apps</td>
    </tr>
    <tr>
    <td>Henric</td>
    <td>Computer Science</td>
    <td>Quantum Computing</td>
    </tr>
    <tr>
    <td>Hunberg alex</td>
    <td>Computer Science</td>
    <td>It Predicts Your Thoughts </td>
    </tr>
    <tr>
    <td>John P. Mello Jr</td>
    <td>Gadgets </td>
    <td>Apple's AR Glasses</td>
    </tr>
    <tr>
    <td>Jack M. Germain</td>
    <td>Computer Science</td>
    <td>Software Piracy Spreading</td>
    </tr>
    <tr>
    <td>John P. Mello Jr</td>
    <td>IT Business</td>
    <td>Macs Move to Apple Silicon</td>
    </tr>
    <tr>
    <td>Johannes Vermeer</td>
    <td>Nanotechnology  </td>
    <td>Photorealistic Painting </td>
    </tr>
    <tr>
    <td>John P. Mello Jr.</td>
    <td>Internet </td>
    <td>Brave Browser </td>
    </tr>
    <tr>
    <td>Marcel Krijger</td>
    <td>Game </td>
    <td>Battery-Free Game Boy</td>
    </tr>
    <tr>
    <td>Ed Moyle</td>
    <td>Cybersecurity </td>
    <td>Cybersecurity </td>
    </tr>
    <tr>
    <td>Jack M. Germain</td>
    <td>Security </td>
    <td>Email Scammers </td>
    </tr>
    <tr>
    <td>Tohoku University</td>
    <td>Tecnology</td>
    <td>Quantum Information </td>
    </tr>
    <tr>
    <td>John P. Mello Jr.</td>
    <td>Game </td>
    <td>Cloud Gaming Revenues </td>
    </tr>
    <tr>
    <td>John P. Mello Jr.</td>
    <td>Game </td>
    <td>Facebook Rumble Over Game </td>
    </tr>
    <tr>
    <td>John P. Mello Jr.</td>
    <td>Game</td>
    <td>US Cloud Gaming </td>
    </tr>
    <tr>
    <td>John P. Mello Jr.</td>
    <td>Mobile Tech</td>
    <td>Foldable Razr, Motorola </td>
    </tr>
    <tr>
    <td>Jim McGregor</td>
    <td>Mobile Tech </td>
    <td>Demystifying 5G </td>
    </tr>
    <tr>
    <td>Jack M. Germain</td>
    <td>Security</td>
    <td>Windows and Linux at Risk </td>
    </tr>
    <tr>
    <td>C. Rubin</td>
    <td>Gadgets </td>
    <td>World’s Largest Digital Camera</td>
    </tr>
    </tbody>

    </table>
<script>
    const searchInput = document.getElementById("search");
    const rows = document.querySelectorAll("tbody tr");
    //console.log(rows);

    searchInput.addEventListener("keyup", function (event) {
      //console.log(event);  
    const q = event.target.value.toLowerCase();
    rows.forEach((row) => {
        row.querySelector("td").textContent.toLowerCase().startsWith(q)
         ? (row.style.display="table-row") 
        : (row.style.display = "none");
    });
});

</script>

</body>
</html>