<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="stylec.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">
</head>
<body>

<nav>
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Our Academy</label>
        <ul>
                            
            <li><a href="#">Teach</a></li>
        </ul>
        </nav>


<div class="container">
    <div class="content">
        <img src="23.jpg" alt="lights">
        <div class="wrapper">
            <h1>Windows and Linux Users at Risk</h1>
            <p>Jack M. Germain</p>
            <section class="block">
                <p>If you are a Windows or Linux user, brace yourself for a long siege of vulnerability nightmares. The fix will be long and treacherous and could brick your computers.

Eclypsium researchers Wednesday released details of a set of newly discovered vulnerabilities dubbed "BootHole" that opens up billions of Windows and Linux devices to attacks.

This is a serious vulnerability with a Common Vulnerability Scoring System (CVSS) rating of 8.2. The highest assigned rating on this severity scale is 10.

The BootHole vulnerability in the GRUB2 bootloader opens up Windows and Linux devices using Secure Boot to attack. To mitigate the attack surface, all operating systems using GRUB2 with Secure Boot must release new installers and bootloaders, the researchers warned.

Attackers exploiting this vulnerability could gain near-total control of the compromised device. The majority of laptops, desktops, servers, and workstations are affected, as well as network appliances and other special-purpose equipment used in industrial, healthcare, financial, and other industries, according to the report.

Researchers warned that mitigating this vulnerability will require the specific vulnerable program to be signed and deployed. They also advised that vulnerable programs should be revoked to prevent adversaries from using older, vulnerable versions in an attack.

Plugging this vulnerability hole will likely be a long process. It will take considerable time for IT departments within organizations to complete patching, the researchers said.

Eclypsium has coordinated the responsible disclosure of this vulnerability with a wide variety of industry entities, including OS vendors, computer manufacturers, and the Computer Emergency Response Team (CERT). A number of these organizations are listed in the report and were part of Wednesday's coordinated disclosure.

"This is probably the most widespread and severe vulnerability that we have found at Eclypsium. Many of the issues we found in the past were specific to a given vendor or model, whereas this issue is pervasive. This vulnerability in Secure Boot affects the default configuration of most systems deployed in the past decade, Jesse Michael, principal researcher for Eclypsium, told TechNewsWorld.</p>
                <p> Attackers can leverage the GRUB2 bootloader that most Linux systems and Windows computers use to gain arbitrary code execution during the boot process. This can happen even when Secure Boot is enabled. Attackers exploiting this vulnerability can install persistent and stealthy bootkits or malicious bootloaders that could give them near-total control over the victim device, according to Eclypsium's report.

What makes this BootHole vulnerability even more threatening is its ability to affect systems using Secure Boot, even if they are not using GRUB2. Almost all signed versions of GRUB2 are vulnerable. This means that nearly every Linux distribution is affected. In addition, GRUB2 supports other operating systems, kernels, and hypervisors such as Xen.

This problem also extends to any Windows device that uses Secure Boot with the standard Microsoft Third-Party UEFI Certificate Authority. Thus, BootHole affects the majority of laptops, desktops, servers, and workstations. The vulnerability also threatens network appliances and other special purpose equipment used in industrial, healthcare, financial, and other industries. This vulnerability makes these devices susceptible to attackers such as the threat actors recently discovered using malicious UEFI bootloaders, noted researchers at Eclypsium.

If the Secure Boot process is compromised, attackers can control how the operating system is loaded and subvert all higher-layer security controls. Recent research identified ransomware in the wild using malicious EFI bootloaders as a way to take control of machines at the time of boot. Previously threat actors used malware tampering with legacy OS bootloaders including APT41 Rockboot, LockBit, FIN1 Nemesis, MBR-ONI, Petya/NotPetya, and Rovnix, noted the report. </p>

            </section>

        </div>
 
    </div>

</div>










<div class="footer">
    <div class="inner-footer">

        <div class="footer-items">
            <h1>IT News</h1>
            <p>Content itself is what the user derives value from....</p>

        </div>

        <div class="footer-items">
            <h1>Quick Links</h1>
            <div class="border"></div>
                <ul>
                    <a href=""><li>Home</li></a>
                    <a href=""><li>Upload</li></a>
                    <a href=""><li>Search</li></a>
                    <a href=""><li>Sign-Up</li></a>
                </ul>

        </div>
        <div class="footer-items">
            <h1>Tutorials</h1>
            <div class="border"></div>
                <ul>
                    <a href=""><li>IT Business</li></a>
                    <a href=""><li>Game</li></a>
                    <a href=""><li>Technology</li></a>
                    <a href=""><li>Gadget</li></a>
                </ul>

        </div>

        <div class="footer-items">
            <h1>Contact Us</h1>
            <div class="border"></div>
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>15/2, Mohammadpur, Dhaka-1207</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+8801844668069</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>support@itdunia.com</li>
                </ul>
                <div class="social-media">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>

        </div>
    </div>
    <div class="footer-bottom">
        Copyright &copy; Computers & Codes 2020. All rights reserved.

    </div>


    </div>

</div>
    
        
    
</body>
</html>