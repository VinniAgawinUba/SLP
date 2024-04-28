<?php
session_start();
//Header
include('includes/header.php');
include('includes/navbar.php');
include('config/dbcon.php');
?>
<style>
    #sample-photo {
        width: 20pc;
        height: 20pc;
        flex: 1;
    }

    #article-header {
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 32px;
        line-height: 39px;
        color: #FFFFFF;
        text-align: center;
    }

    .header {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #A19158;
        padding: 15px 0;
        color: white;
        font-size: 34px;
        font-family: 'Inter';
        font-weight: 800;
        font-style: normal;
        margin-top: -90px;
    }

    body {
        margin-left: 100px;
        margin-right: 100px;
    }

    p {
        color: black;
    }

    a {
        text-decoration: none;
    }

    #first-content {
        /* background-image: url('assets/images/BG.png'); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
        margin-top: 100px;
        margin-bottom: 1000px;
        color: #283971;
    }

    #third-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no
    }

    #fourth-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 35vw;
        object-fit: contain;
    }

    #fifth-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
    }

    #home-text {
        color: #283971;
        font-size: 16px;
        line-height: 1.6;
        width: 50em;
        text-align: justify;
    }

    .mandate-vision-section {
        display: flex;
        flex-wrap: wrap;
        width: 50em;
        margin-top: 30px;
    }

    .box {
        flex: 1 1 30%;
        margin: 10px;
        padding: 20px;
        border: 1px solid #ccc;
        text-align: center;
    }

    .icon {
        font-size: 30px;
    }

    .text {
        margin-top: 10px;
        color: #283971;
    }

    #importance-section {
        margin-top: 30px;
    }

    h2 {
        margin-top: 30px;
    }
</style>
<link rel="stylesheet" href="assets/css/custom.css">

</p>

<body>
    <div class="container-fluid" id="first-content">
        <div class="row gy-3">
            <!-- Main Body -->
            <div class="mainContent">
                <div class="row gy-3">
                    <div class="col-md-11" class="cardClass">
                        <div id="home-box">
                            <div id="home-layer">
                                <div class="home-article">
                                    <h2>Program Overview and Rationale</h2>
                                    <p id="home-text">
                                        The Xavier Ateneo Service Learning Program (SLP) integrates academic instruction,meaningful
                                        service, and critical reflective thinking to promote student learning and civic responsibility.
                                        Anchored on the learning competencies of the subject, it combines formal classroom instruction
                                        with local community engagement.
                                    </p>
                                </div>
                                <div id="importance-section">
                                    <h2>Importance of Service Learning </h2>
                                    <ul>
                                        <li>🌍 Provides relevant service in the community.</li>
                                        <li>📚 Enhances academic learning.</li>
                                        <li>🔄 Translates theory into practice.</li>
                                        <li>👥 Fosters purposeful civic learning through lived experiences.</li>
                                        <li>🤝 Aligns with the Jesuit mission of solidarity with those in need and the United Nations’ Sustainable Development Goals.</li>
                                    </ul>
                                </div>
                                <h2>Mandate and Vision</h2>
                                <div class="mandate-vision-section">
                                    <div class="box">
                                        <div class="icon">🔍</div>
                                        <div class="text">Mandated by Xavier Ateneo President Fr. Roberto C Yap SJ in SY 2016-2017.</div>
                                    </div>
                                    <div class="box">
                                        <div class="icon">🎯</div>
                                        <div class="text">Aims to broaden research and strengthen students’ social formation.</div>
                                    </div>
                                    <div class="box">
                                        <div class="icon">🔄</div>
                                        <div class="text">Encourages discipline- or course-based engagement.</div>
                                    </div>
                                    <div class="box">
                                        <div class="icon">🏞️</div>
                                        <div class="text">Emphasizes collaborative work within a community context.</div>
                                    </div>
                                    <div class="box">
                                        <div class="icon">🕊️</div>
                                        <div class="text">Inspired by the Ignatian perspective of forming men and women for and with others.</div>
                                    </div>
                                    <div class="box">
                                        <div class="icon">📈</div>
                                        <div class="text">Empowers communities to drive sustainable change.</div>
                                    </div>
                                </div>
                                <div class="characteristics-section">
                                    <h2>Characteristics of XU – SLP</h2>
                                    <ul>
                                        <li>Competence: Acquired theories, knowledge, and skill sets</li>
                                        <li>Contact: Engagement with communities to understand social conditions</li>
                                        <li>Compassion: Strengthening the value of preferential option for the poor through reflection</li>
                                    </ul>
                                </div>
                                <div class="desired-outcomes-section">
                                    <h2>Desired Outcomes</h2>
                                    <p id="home-text">
                                        It aspires to produce professionals with a heart-for-and-with-others - able to apply their academic
                                        competence and training in the service of nation-building, conscious of their responsibilities as global
                                        citizens, guided by Ignatian discernment and rooted in a personal relationship with God, strongly oriented
                                        to faith and justice and critically rooted in their culture.
                                        <br>
                                        <br>
                                        Our desire is not being blinded by the radiant glow of their self-perceived greatness. A meditative reflection
                                        is essential for self-discernment and leads them to self-transformation to become lifelong learners who
                                        demonstrate critical concerns for the society.
                                    </p>
                                </div>
                                <div class="approach-section">
                                    <h2>Service Learning as Approach to Teaching (Competence)</h2>
                                    <p id="home-text">As an approach to teaching, actual student community engagement is integrated in the syllabus and forms part 
                                        of the teaching methodology to achieve the learning objectives of a course or subject. The students’ engagements 
                                        are based on needs expressed by partner communities by which they can possibly offer solutions and new perspectives

                                        <br>
                                        <br>
                                        The faculty is expected to craft rubrics for each area visit/work to assess how the learning objectives are achieved 
                                        as the students progress in their engagement. Service learning components such as area work performance, final SL 
                                        outputs, presentation of SL outputs to partner community, summative reflection, attendance during the processing 
                                        session, are also integrated in the grading matrix.
                                    </p>
                                    
                                </div>

                                <div class="program-section">
                                    <h2>SLP Program Structure</h2>
                                    <p id="home-text">As a program, SLP is lodged under the Social Development Cluster and is run by a team of formators who provide oversight function in the preparation, implementation, and post-implementation of the students’ engagements. Below is the SL process of implementation in Xavier Ateneo:</p>
                                    <!-- Add more detailed information about the SL process here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- Footer -->
<?php include('includes/footer.php'); ?>