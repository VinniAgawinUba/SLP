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

    a {
        text-decoration: none;
    }

    #first-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 40vw;
        object-fit: contain;
        margin-top: 100px;
    }

    #second-content {
        background-image: url('assets/images/BG.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 30vw;
        object-fit: contain;
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

</style>
<link rel="stylesheet" href="assets/css/custom.css">

</p>

<body>
    <div class="container-fluid" id="first-content">
        <div class="row gy-3">
            <!-- Main Body -->
            <div class="mainContent">
                <div class="row gy-3">
                    <div class="header">
                        <h5 id="article-header">ABOUT US</h5>
                    </div>
                    <div class="col-md-11" class="cardClass">
                        <div id="home-box">
                            <div id="home-layer">
                            <div class="home-article">
                                <h5 id="home-header" style="color: white; font-size: 24px; font-weight: bold; margin-bottom: 10px;">Program Overview and Rationale</h5>
                                <p id="home-text" style="color: white; font-size: 16px; line-height: 1.6;">
                                    Xavier Ateneo Service Learning Program (SLP) is a teaching methodology that combines academic instruction, meaningful service, and critical reflective thinking to promote student learning and civic responsibility anchored on the learning competencies of the subject through formal classroom instruction and local community engagement.

                                    Service learning provides relevant and meaningful service in the community, enhances academic learning, translates theory into practice, and ideas into action and creates an opportunity for purposeful civic learning through a lived experience of the Jesuit mission – solidarity with those in need (preferential option for the poor), and in the light and provision of the Jesuit Province Roadmap and of the United Nations’ Sustainable Development Goals.

                                    Service-learning was mandated by the Xavier Ateneo President Fr. Roberto C Yap SJ at the onset of SY 2016-2017 to broaden the research and strengthen the students’ social formation. This puts premium on learning through discipline- or course-based engagement. Students will be able to work collaboratively within a community context and engage the students to address the needs of the community. It is an experiential learning experience that transpires a reflective-action inspired from the Ignatian perspective of forming men and women for and with others.

                                    It aspires to produce professionals with a heart-for-and-with-others - able to apply their academic competence and training in the service of nation-building, conscious of their responsibilities as global citizens, guided by Ignatian discernment and rooted in a personal relationship with God, strongly oriented to faith and justice and critically rooted in their culture. 

                                    Our desire is not being blinded by the radiant glow of their self-perceived greatness. A meditative reflection is essential for self-discernment and leads them to self-transformation to become lifelong learners who demonstrate critical concerns for the society.
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="second-content">
        <div class="row gy-3">
            <!-- Main Body -->
            <div class="mainContent">
                <div class="row gy-3">
                    <div class="col-md-11" class="cardClass">
                        <div id="home-box">
                            <div id="home-layer">
                            <div class="home-article">
                                <h5 id="home-header" style="color: white; font-size: 24px; font-weight: bold; margin-bottom: 10px;">Characteristics of XU – SLP</h5>
                                <p id="home-text" style="color: white; font-size: 16px; line-height: 1.6;">
                                Accordingly, the characteristics that define Xavier Ateneo’s SLP are competence (acquired theories, knowledge, and skill sets), contact (which provides the opportunity for meaningful service and the experience to be disturbed and moved by, and to be objectively critical of social conditions), and compassion (opportunity to strengthen the Ignatian value of preferential option for the poor as they undergo reflection and processing sessions). Additionally, Xavier Ateneo’s service learning fulfills three major roles: 1) Satisfy academic requirement; 2) Contribute to actual social/community development work; and 3) Strengthen student social formation, which complements the work of forming of leaders of character, as envisioned by the University.
Service Learning as Approach to Teaching (Competence)
 
As an approach to teaching, actual student community engagement is integrated in the syllabus and forms part of the teaching methodology to achieve the learning objectives of a course or subject.  The students’ engagements are based on needs expressed by partner communities by which they can possibly offer solutions and new perspectives. The faculty is expected to craft rubrics for each area visit/work to assess how the learning objectives are achieved as the students progress in their engagement. Service learning components such as area work performance, final SL outputs, presentation of SL outputs to partner community, summative reflection, attendance during the processing session, are also integrated in the grading matrix.
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="third-content">
        <div class="row gy-3">
        <!-- Main Body -->
            <div class="mainContent">
                <div class="row gy-3">
                    <div class="col-md-11" class="cardClass">
                        <div id="home-box" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <div id="home-layer">
                            <h5 id="home-header" style="color: white; font-size: 24px; font-weight: bold; margin-bottom: 10px;">As a program, SLP is lodged under the Social Development Cluster and is run by a team of formators who provide oversight function in the preparation, implementation, and post-implementation of the students’ engagements, articulated below is the SL process of implementation in Xavier Ateneo:</h5>
                            </div>
                                <div>
                                <img src="assets/images/bgslp.png" alt="">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="fourth-content">
        <div class="row gy-3">
            <!-- Main Body -->
            <div class="mainContent">
                <div class="row gy-3">
                    <div class="col-md-11" class="cardClass">
                        <div id="home-box">
                            <div id="home-layer">
                            <div class="home-article">
                                <h5 id="home-header" style="color: white; font-size: 24px; font-weight: bold; margin-bottom: 10px;">Service Learning as a tool for Social Formation of students (Compassion)
</h5>
                                <p id="home-text" style="color: white; font-size: 16px; line-height: 1.6;">
                                Work of Jesuit Education and the traditional aim of Jesuit education has been to train leaders that will work for a more just and humane society. The aim of Jesuit Education is to educate leaders in service. Social Formation will help students to develop the qualities of mind and heart that will enable them, in whatever station they assume in life, to work with others for the good of all in the service of the Kingdom of God. 

In light of both the needs of our world and the Jesuit mission in higher education, service learning offers a potent and engaged pedagogy consonant with the long and successful history of Jesuit education, consistent with the central tenets of Ignatian spirituality, and compatible with the Jesuit focus on educating students for a just society.

SLP does this through regular reflection, end of semester processing session and mentoring. Students are not only exposed to communities but such experiences are deepened through sessions that will encourage them to look deeply into their service learning experience and find the congruence of these experiences to the signs of our times. In this way, students are encouraged to actively engage themselves in the change we advocate and become change agents themselves in their line of work and or expertise.

The process of social formation in Jesuit institutions and universities will always include challenging students' preconceived notions and encouraging them to rethink their long held conceptions of the world. The educational experience therefore, rests on the idea that our students are capable of learning brought about by a free and active engagement in society through Service Learning engagement in communities. As J. Kavanaugh writes in the book Jesuit Higher Education, "the meaning and purpose of education is justice itself. Human dignity is its premise. Human freedom is its goal”.
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="fifth-content">
        <div class="row gy-3">
            <!-- Main Body -->
            <div class="mainContent">
                <div class="row gy-3">
                    <div class="col-md-11" class="cardClass">
                        <div id="home-box">
                            <div id="home-layer">
                            <div class="home-article">
                                <h5 id="home-header" style="color: white; font-size: 24px; font-weight: bold; margin-bottom: 10px;">Service Learning as a means to achieve Sustainable Development (Contact)

</h5>
                                <p id="home-text" style="color: white; font-size: 16px; line-height: 1.6;">
                                Since its institutionalization in 2016, XU-SLP has engaged more students and faculty in various communities and sectors in Cagayan de Oro City, in municipalities of Misamis Oriental and Bukidnon, and many of their barangays for discipline-based solutions and projects. The program also continues to explore other modes of SL implementation to evolve into more interdisciplinary engagements for community development.
                                </p>
                                <div id="home-box" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                <div>
                                <img src="assets/images/bgslpsy.png" alt="">
                                </div>
                        </div>
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