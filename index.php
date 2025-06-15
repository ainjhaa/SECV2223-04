<!-- 
  Group Members:
  1. AIN NAJIHA BINTI JUNAIDI (A23CS0038)
  2. MUHAMMAD ZULQARNAIN BIN ALI (A23CS0139)
  3. SIA JUN YI (A23CS0178)
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Assignment 2</title>
    <link rel="stylesheet" href="a2style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>

  <body>
    <div class="wrapper">
      <div class="grid-container" id="top">
        <!-- Header -->
        <div class="header">
          <h1>Welcome to My Website</h1>
          <p class="tagline">Exploring the World of Computing</p>
        </div>

        <!-- Left Sidebar -->
        <nav class="left" aria-label="Main navigation">
          <a href="#intro"><i class="fas fa-user"></i> Introduction</a>
          <a href="#biography"><i class="fas fa-address-card"></i> Biography</a>
          <a href="#project"><i class="fas fa-laptop-code"></i> My Project</a>
          <a href="#others"><i class="fas fa-envelope"></i> Contact</a>
        </nav>

        <!-- Right Sidebar -->
        <div class="right">
          <details>
            <summary><strong>More</strong></summary>
            <br>
            <div class="right-item">
              <a href="#skills">My Skills</a>
              <a href="#messages">Messages</a>
            </div>
          </details>
        </div>

        <!-- Main Content -->
        <main class="content">
          <!-- Introduction -->
          <section class="content1" id="intro">
            <h2>Introduction</h2>
            <div class="intro-container">
              <div class="intro-text">
                <p>Hi, my name is</p>
                <h1>Muhammad Zulqarnain,</h1>
                <h3>I'm a computer network student.</h3>
              </div>
              <div class="intro-image">
                <img src="photo.jpg" alt="Portrait of Muhammad Zulqarnain" />
              </div>
            </div>
          </section>

          <!-- Biography -->
          <section class="content2" id="biography">
            <h2>Biography</h2>
            <div class="intro-container">
              <div class="intro-image">
                <img
                  src="https://images.unsplash.com/photo-1497316730643-415fac54a2af?fm=jpg&q=60&w=3000"
                  alt="Man taking a photo outdoors"
                />
              </div>
              <div class="intro-text">
                <p>This is my biography</p>
                <table>
                  <tr>
                    <td>Birth date: 03 May 2004</td>
                    <td>Country: Malaysia</td>
                  </tr>
                  <tr>
                    <td>Religion: Islam</td>
                    <td>Age: 23</td>
                  </tr>
                  <tr>
                    <td>Race: Malay</td>
                    <td>Phone: 010-2322213</td>
                  </tr>
                </table>
              </div>
            </div>
          </section>

          <!-- Projects -->
          <section class="content3" id="project">
            <h2>My Project</h2>

            <div class="member-card">
              <div class="member-info">
                <img
                  src="https://edison365.com/?seraph_accel_gi=wp-content%2Fuploads%2F2022%2F03%2FHow-do-hackathons-work.png&n=iNf2OlXUkWEBkZdk37MnnA"
                  alt="Hackathon project"
                />
                <h3>Hackathons</h3>
                <p><em>3 September 2023</em></p>
                <p>
                  Managed a team of 4 developers to brainstorm, prototype, and
                  pitch a solution within 36 hours...
                </p>
              </div>
            </div>

            <div class="member-card">
              <div class="member-info">
                <img
                  src="https://www.regens.com/documents/20182/72144/first+AI+project+CIKKBE.jpg/03f41983-cbde-0ff0-470d-89f9d8733bed?t=1563869152630"
                  alt="AI project interface preview"
                />
                <h3>AI project</h3>
                <p><em>4 October 2022</em></p>
                <p>
                  Built an AI model to detect pneumonia from X-rays. Achieved
                  88% accuracy using CNN + Flask...
                </p>
              </div>
            </div>
          </section>

          <!-- Skills -->
          <section class="skills-section" id="skills">
            <h2>My Skills</h2>
            <div class="skills-container">
              <div class="skill-box">
                <img
                  src="https://d502jbuhuh9wk.cloudfront.net/courses/6570c175e4b00d436e1c89c0/6570c175e4b00d436e1c89c0_scaled_cover.jpg?v=1"
                  alt="HTML logo"
                />
                <p>HTML</p>
              </div>
              <div class="skill-box">
                <img
                  src="https://cdn-icons-png.flaticon.com/512/919/919826.png"
                  alt="CSS logo"
                />
                <p>CSS</p>
              </div>
              <div class="skill-box">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRss-86vRuxOArrVRmMgerLZ5pi8yCs6U7zsQ&s"
                  alt="JavaScript logo"
                />
                <p>JavaScript</p>
              </div>
            </div>
          </section>

          <!-- Contact -->
          <section class="content4" id="others">
            <h2>Contact Us</h2>
            <div class="contact-section">
              <div class="contact-info">
                <h3>Feel free to contact me</h3>
                <form class="contact-form" action="ass3.php" method="post" aria-label="Contact Form">
                  <label for="name">Name:</label>
                  <input type="text" id="name" name="name" required />

                  <label for="email">Email:</label>
                  <input type="email" id="email" name="email" required />

                  <label for="message">Message:</label>
                  <textarea id="message" name="message" rows="4"
                    placeholder="Write your message here..." required ></textarea>
                    
                  <button type="submit">Submit</button>
                </form>
              </div>
              <div class="contact-table">
                <table>
                  <tr>
                    <td>
                      Email:
                      <a href="mailto:zulqarnain@graduate.utm.my"
                        >zulqarnain@graduate.utm.my</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>Instagram: <a href="#">instagram.com/zulll</a></td>
                  </tr>
                  <tr>
                    <td>Facebook: <a href="#">facebook.com/zulll</a></td>
                  </tr>
                  <tr>
                    <td>Phone: 010-2322213</td>
                  </tr>
                  <tr>
                    <td>
                      Address: Universiti Teknologi Malaysia, Skudai, 83110
                      Johor Bahru, Johor
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <!-- Messages -->          
            <section class="content5" id="messages">
                <h2>Messages</h2>
            
                <?php
                $host = "sql100.infinityfree.com";
                $username = "if0_39233150";     
                $password = "tplj4GhvUkArN";         
                $dbname = "if0_39233150_myass3"; 

                $conn = new mysqli($host, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $result = $conn->query("SELECT fullname, con_message, msg_time FROM ContactMsgs ORDER BY msg_time DESC");
                
                while ($row = $result->fetch_assoc()) {
                    echo "<p><strong>" . htmlspecialchars($row['fullname']) . "</strong> - <small>" . $row['msg_time'] . "</small><br>";
                    echo (htmlspecialchars($row['con_message'])) . "</p><br><hr>";
                }
                $conn->close();
                ?>
            </section>
          </section>

        </main>

        <!-- Footer -->
        <div class="footer">
          <p>2025 All rights reserved.</p>
        </div>
      </div>
    </div>

    <!-- Scroll to top button -->
    <a href="#top" class="scroll-top" aria-label="Scroll to top" role="button"
      >&uarr;</a
    >

    <!-- JavaScript Interactivity -->
    <script>
      // FORM VALIDATION
      document
        .querySelector(".contact-form")
        .addEventListener("submit", function (e) {
          const name = document.getElementById("name");
          const email = document.getElementById("email");
          const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

          if (name.value.trim() === "") {
            alert("Please enter your name.");
            e.preventDefault();
            return;
          }

          if (!email.value.match(emailPattern)) {
            alert("Please enter a valid email address.");
            e.preventDefault();
          }
        });

      // SCROLL-TO-TOP BUTTON VISIBILITY
      const scrollTopBtn = document.querySelector(".scroll-top");
      scrollTopBtn.style.display = "none";
      window.addEventListener("scroll", () => {
        scrollTopBtn.style.display = window.scrollY > 200 ? "block" : "none";
      });
    </script>
  </body>
</html>
