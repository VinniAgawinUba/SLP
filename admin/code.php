<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include ('authentication.php');
//Add Department
if(isset($_POST['add_department']))
{
    $name = $_POST['name'];
    $college_id = $_POST['college_id'];

    //Insert the Department
    $query = "INSERT INTO department (name, college_id) VALUES ('$name', '$college_id')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "New Department has been added";
        header('Location: department-add.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: department-add.php');
        exit(0);
    }
}

//Update Department
if(isset($_POST['update_department']))
{
    $department_id = $_POST['id'];
    $name = $_POST['name'];
    $college_id = $_POST['college_id'];

    //UPDATE the Department
    $query = "UPDATE department SET name = '$name', college_id = '$college_id' WHERE id = '$department_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Department has been Updated";
        header('Location: department-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: department-edit.php');
        exit(0);
    }
}

//Delete Department
if(isset($_POST['department_delete']))
{
    $department_id = $_POST['department_delete'];

    $query = "DELETE FROM department WHERE id = '$department_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Department has been deleted";
        header('Location: department-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: department-view.php');
        exit(0);
    }
}


//Add College
if(isset($_POST['add_college'])) {
    $name = $_POST['name'];
    $dean_id = $_POST['dean_id'];
    $logo_image = $_FILES['logo_image'];

    // Check if a new file is uploaded
    if($logo_image['size'] > 0) {
        // Rename the file
        $image_extension = pathinfo($logo_image['name'], PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_extension;

        // Move the uploaded file to the target directory
        $target_directory = '../uploads/college_logos/';
        $target_file = $target_directory . $filename;
        if(move_uploaded_file($logo_image['tmp_name'], $target_file)) {
            // Insert the College record with the new logo image
            $query = "INSERT INTO college (name, dean_id, logo_image) VALUES ('$name', '$dean_id', '$filename')";
            $query_run = mysqli_query($con, $query);
        } else {
            $_SESSION['message'] = "Failed to upload file";
            header('Location: college-add.php');
            exit(); // Terminate script after redirect
        }
    } else {
        // No new file uploaded, insert the College record without the logo image
        $query = "INSERT INTO college (name, dean_id) VALUES ('$name', '$dean_id')";
        $query_run = mysqli_query($con, $query);
    }

    // Check if the query for adding the College was successful
    if($query_run) {
        $_SESSION['message'] = "New College has been added";
        header('Location: college-add.php');
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: college-add.php');
    }
}

//Update College
if(isset($_POST['update_college'])) {
    $college_id = $_POST['id'];
    $name = $_POST['name'];
    $dean_id = $_POST['dean_id'];
    $logo_image = $_FILES['logo_image'];

    // Check if a new file is uploaded
    if($logo_image['size'] > 0) {
        // Rename the file
        $image_extension = pathinfo($logo_image['name'], PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_extension;
        
        // Move the uploaded file to the target directory
        $target_directory = '../uploads/college_logos/';
        $target_file = $target_directory . $filename;
        if(move_uploaded_file($logo_image['tmp_name'], $target_file)) {
            // Remove old file if exists
            if(!empty($_POST['old_logo_image']) && file_exists($target_directory . $_POST['old_logo_image'])) {
                unlink($target_directory . $_POST['old_logo_image']);
            }
        } else {
            $_SESSION['message'] = "Failed to upload file";
            header('Location: college-edit.php?id=' . $college_id);
            exit(); // Terminate script after redirect
        }
    } else {
        // No new file uploaded, use the existing one
        $filename = $_POST['old_logo_image'];
    }

    // Update the College record, excluding the logo image field
    $query = "UPDATE college SET name = '$name', dean_id = '$dean_id' WHERE id = '$college_id'";
    $query_run = mysqli_query($con, $query);

    // Check if the query for updating other fields was successful
    if($query_run) {
        // If a new logo image is uploaded, update the logo image field
        if(isset($filename)) {
            $query = "UPDATE college SET logo_image = '$filename' WHERE id = '$college_id'";
            $query_run = mysqli_query($con, $query);
        }
        
        $_SESSION['message'] = "College has been Updated";
        header('Location: college-view.php');
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: college-edit.php?id=' . $college_id);
    }
}

//Delete College
if(isset($_POST['college_delete']))
{
    $college_id = $_POST['college_delete'];

    $query = "DELETE FROM college WHERE id = '$college_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "College has been deleted";
        header('Location: college-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: college-view.php');
        exit(0);
    }
}



//Add Partner
if(isset($_POST['partner_add_btn'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact_person = $_POST['contact_person'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $type_id = $_POST['type_id'];
    $logo_image = $_FILES['logo_image'];

    // Check if a new file is uploaded
    if($logo_image['size'] > 0) {
        // Rename the file
        $image_extension = pathinfo($logo_image['name'], PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_extension;

        // Move the uploaded file to the target directory
        $target_directory = '../uploads/partner_logos/';
        $target_file = $target_directory . $filename;
        if(move_uploaded_file($logo_image['tmp_name'], $target_file)) {
            // Insert the Partner record with the new logo image
            $query = "INSERT INTO partners (name, address, contact_person, email, contact_number, logo_image) VALUES ('$name', '$address', '$contact_person', '$email', '$contact_number', '$filename')";
            $query_run = mysqli_query($con, $query);
        } else {
            $_SESSION['message'] = "Failed to upload file";
            header('Location: partner-add.php');
            exit(); // Terminate script after redirect
        }
    } else {
        // No new file uploaded, insert the Partner record without the logo image
        $query = "INSERT INTO partners (
            name, 
            address, 
            contact_person, 
            email, 
            contact_number, 
            type_id
            ) VALUES (
                '$name', 
                '$address', 
                '$contact_person', 
                '$email', 
                '$contact_number',
                '$type_id' 
            )";
        $query_run = mysqli_query($con, $query);
    }

    // Check if the query for adding the Partner was successful
    if($query_run) {
        $_SESSION['message'] = "New Partner has been added";
        header('Location: partner-add.php');
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: partner-add.php');
    }
}


//Update Partner
if(isset($_POST['update_partner'])) {
    $partner_id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact_person = $_POST['contact_person'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $type_id = $_POST['type_id'];
    $logo_image = $_FILES['logo_image'];

    // Check if a new file is uploaded
    if($logo_image['size'] > 0) {
        // Rename the file
        $image_extension = pathinfo($logo_image['name'], PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_extension;

        // Move the uploaded file to the target directory
        $target_directory = '../uploads/partner_logos/';
        $target_file = $target_directory . $filename;
        if(move_uploaded_file($logo_image['tmp_name'], $target_file)) {
            // Remove old file if exists
            if(!empty($_POST['old_logo_image']) && file_exists($target_directory . $_POST['old_logo_image'])) {
                unlink($target_directory . $_POST['old_logo_image']);
            }
        } else {
            $_SESSION['message'] = "Failed to upload file";
            header('Location: partner-edit.php?id=' . $partner_id);
            exit(); // Terminate script after redirect
        }
    } else {
        // No new file uploaded, use the existing one
        $filename = $_POST['old_logo_image'];
    }

    // Update the Partner record
    $query = "UPDATE partners SET 
    name = '$name', 
    address = '$address', 
    contact_person = '$contact_person', 
    email = '$email', 
    contact_number = '$contact_number', 
    type_id = '$type_id',
    logo_image = '$filename' 
    WHERE id = '$partner_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Partner has been Updated";
        header('Location: partner-view.php');
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: partner-edit.php?id=' . $partner_id);
    }
}


//PARTNER DELETE
if(isset($_POST['partner_delete_btn']))
{
    $partners_id = $_POST['partner_delete_btn'];

    // Ensure that $partners_id is properly sanitized to prevent SQL injection

    $query = "DELETE FROM partners WHERE id = '$partners_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Partner has been deleted";
        header('Location: partner-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: partner-view.php');
        exit(0);
    }
}



//Add Faculty
if(isset($_POST['add_faculty'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $college_id = $_POST['college_id'];
    $department_id = $_POST['department_id'];
    $role = $_POST['role'];

    // Image Upload
    $image = $_FILES['image']['name'];
    // Rename this image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' .$image_extension;


    // Insert the Post with the category_id
    $query = "INSERT INTO faculty (fname, lname, email, college_id, department_id, role, image) 
              VALUES ('$fname', '$lname', '$email', '$college_id', '$department_id', '$role', '$filename')";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        // Upload the image to uploads folder
        move_uploaded_file($_FILES['image']['tmp_name'],'../uploads/faculty/'.$filename);
        $_SESSION['message'] = "New Faculty has been added";
        header('Location: faculty-add.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: faculty-add.php');
        exit(0);
    }
}

//Update Faculty
if(isset($_POST['update_faculty'])) {
    $faculty_id = $_POST['faculty_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $college_id = $_POST['college_id'];
    $department_id = $_POST['department_id'];
    $role = $_POST['role'];

    // Image Upload
    $image = $_FILES['image']['name'];
    // Rename this image
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' .$image_extension;

    $old_filename = $_POST['old_image'];

    // Update the Faculty with the new values
    $query = "UPDATE faculty SET fname = '$fname', lname = '$lname', email = '$email', college_id = '$college_id', department_id = '$department_id', role = '$role', image = '$filename' WHERE id = '$faculty_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        if($image != NULL) {
            if(file_exists('../uploads/faculty/' . $_POST['old_image'])) 
            {
                unlink('../uploads/faculty/' . $_POST['old_image']);
            }
            // Upload the image to uploads folder
            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/faculty/' . $filename);
        }
        $_SESSION['message'] = "Faculty has been updated";
        header('Location: faculty-edit.php?id='.$faculty_id);
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: faculty-edit.php?id='.$faculty_id);
        exit(0);
    }
}

//Delete Faculty
if(isset($_POST['faculty_delete_btn']))
{
    $faculty_id = $_POST['faculty_delete_btn'];

    $query = "DELETE FROM faculty WHERE id = '$faculty_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Faculty has been deleted";
        header('Location: faculty-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: faculty-view.php');
        exit(0);
    }
}


//Add Student
if(isset($_POST['add_student']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $college_id = $_POST['college_id'];
    $department_id = $_POST['department_id'];
    $year_level = $_POST['year_level'];
    $student_number = $_POST['student_number'];
    $project_id = $_POST['project_id'];

    //Insert the Student
    $query = "INSERT INTO students (fname, lname, college_id, department_id, year_level, student_number, project_id) VALUES ('$fname', '$lname', '$college', '$department', '$year_level', '$student_number', '$project_id')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "New Student has been added";
        header('Location: student-add.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: student-add.php');
        exit(0);
    }
}

//Update Student
if(isset($_POST['update_student']))
{
    $student_id = $_POST['student_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $college_id = $_POST['college_id'];
    $department_id = $_POST['department_id'];
    $year_level = $_POST['year_level'];
    $student_number = $_POST['student_number'];
    $project_id = $_POST['project_id'];

    //UPDATE the Student
    $query = "UPDATE students SET fname = '$fname', lname = '$lname', college_id = '$college_id', department_id = '$department_id', year_level = '$year_level', student_number = '$student_number', project_id = '$project_id' WHERE id = '$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student has been Updated";
        header('Location: student-edit.php?id='.$student_id);
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: student-edit.php?id='.$student_id);
        exit(0);
    }
}



// Add Project
if(isset($_POST['project_add_btn'])) {
    $name = $_POST['pname'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $subject_hosted = $_POST['subject_hosted'];
    $college_id = $_POST['college_id'];
    $department_id = $_POST['department_id'];
    $sd_coordinator_id = $_POST['sd_coordinator_id'];
    $partner_id = $_POST['partner_id'];
    $school_year_id = $_POST['school_year_id'];
    $semester = $_POST['semester'];
    $status = $_POST['status']; // Assuming all projects start as "In Progress"
    $sdgs = $_POST['sdgs'];

    // Insert the Project into the database
    $query = "INSERT INTO projects (name, type, description, subject_hosted, college_id, department_id, sd_coordinator_id, partner_id, school_year_id, semester, status) 
              VALUES ('$name', '$type', '$description', '$subject_hosted', '$college_id', '$department_id', '$sd_coordinator_id', '$partner_id', '$school_year_id', '$semester', '$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $project_id = mysqli_insert_id($con); // Get the last inserted project_id

        /// Update SDGs with sdg array
            foreach ($sdgs as $sdg) {
                $sdg_query = "INSERT INTO project_sdgs (project_id, sdg) VALUES ('$project_id', '$sdg')";
                $sdg_query_run = mysqli_query($con, $sdg_query);
                if(!$sdg_query_run) {
                    $_SESSION['message'] = "Error inserting SDGs into database";
                    header('Location: project-add.php');
                }
            }
        

        //Check if faculty post array is SET
         if(isset($_POST['faculty']) && is_array($_POST['faculty'])) {
            foreach($_POST['faculty'] as $faculty_id) {
                // Insert faculty id and project id into project_faculty table
                $faculty_project_query = "INSERT INTO project_faculty (project_id, faculty_id) VALUES ('$project_id', '$faculty_id')";
                $faculty_project_query_run = mysqli_query($con, $faculty_project_query);
                if(!$faculty_project_query_run) {
                    $_SESSION['message'] = "Error inserting faculty details into database";
                    header('Location: project-add.php');
                }
            }
        }


        // Debugging statement
        echo "<pre>";
        print_r($_FILES['project_documents']);
        echo "</pre>";

        // Upload multiple files
        if(isset($_FILES['project_documents'])) {
            $file_count = count($_FILES['project_documents']['name']);
            for($i = 0; $i < $file_count; $i++) {
                $file_name = $_FILES['project_documents']['name'][$i];
                $file_tmp = $_FILES['project_documents']['tmp_name'][$i];
                $file_type = $_FILES['project_documents']['type'][$i];
                $file_size = $_FILES['project_documents']['size'][$i];
                $file_error = $_FILES['project_documents']['error'][$i];

                if($file_error === UPLOAD_ERR_OK) {
                    $file_destination = '../uploads/project_documents/' . $file_name;
                    if(move_uploaded_file($file_tmp, $file_destination)) {
                        // Insert file details into project_documents table
                        $query = "INSERT INTO project_documents (project_id, file_name, file_type, file_size, file_path) 
                                  VALUES ('$project_id', '$file_name', '$file_type', '$file_size', '$file_destination')";
                        $query_run = mysqli_query($con, $query);

                        if(!$query_run) {
                            $_SESSION['message'] = "Error inserting file details into database";
                            header('Location: project-add.php');
                        }
                    } else {
                        $_SESSION['message'] = "Error moving uploaded file to destination folder";
                        header('Location: project-add.php');
                    }
                } else {
                    $_SESSION['message'] = "Error uploading file: " . $_FILES['project_documents']['name'][$i];
                    header('Location: project-add.php');
                }
            }
        } else {
            // Debugging statement
            echo "No project_documents uploaded";
        }

        $_SESSION['message'] = "New Project has been added";
        header('Location: project-add.php');
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: project-add.php');
    }
}


// Update Project
if (isset($_POST['project_edit_btn'])) {
    $project_id = $_POST['project_id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $subject_hosted = $_POST['subject_hosted'];
    $college_id = $_POST['college_id'];
    $department_id = $_POST['department_id'];
    $sd_coordinator_id = $_POST['sd_coordinator_id'];
    $partner_id = $_POST['partner_id'];
    $school_year_id = $_POST['school_year_id'];
    $semester = $_POST['semester'];
    $status = $_POST['status'];

    // Begin by updating project details
    $query = "UPDATE projects SET name = '$name', type = '$type', description = '$description', subject_hosted = '$subject_hosted', college_id = '$college_id', department_id = '$department_id', sd_coordinator_id = '$sd_coordinator_id', partner_id = '$partner_id', school_year_id = '$school_year_id', semester = '$semester', status = '$status' WHERE id = '$project_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        // Update SDGs covered by the project
        $selected_sdgs = isset($_POST['sdgs']) ? $_POST['sdgs'] : array();
        $delete_query = "DELETE FROM project_sdgs WHERE project_id = '$project_id'";
        mysqli_query($con, $delete_query);
        foreach ($selected_sdgs as $sdg) {
            $insert_query = "INSERT INTO project_sdgs (project_id, sdg) VALUES ('$project_id', '$sdg')";
            mysqli_query($con, $insert_query);
        }


        // Check if any files are uploaded
        if (!empty($_FILES['project_documents']['name'][0])) {
            $file_count = count($_FILES['project_documents']['name']);
            for ($i = 0; $i < $file_count; $i++) {
                $file_name = $_FILES['project_documents']['name'][$i];
                $file_tmp = $_FILES['project_documents']['tmp_name'][$i];
                $file_type = $_FILES['project_documents']['type'][$i];
                $file_size = $_FILES['project_documents']['size'][$i];
                $file_error = $_FILES['project_documents']['error'][$i];

                if ($file_error === UPLOAD_ERR_OK) {
                    $file_destination = '../uploads/project_documents/' . $file_name;
                    move_uploaded_file($file_tmp, $file_destination);



                    // Insert file details into project_documents table
                    $query = "INSERT INTO project_documents (project_id, file_name, file_type, file_size, file_path) 
                              VALUES ('$project_id', '$file_name', '$file_type', '$file_size', '$file_destination')";
                    $query_run = mysqli_query($con, $query);
                }
            }
        }

        // Handle faculty members
        if (isset($_POST['faculty'])) {
            // Delete existing faculty associated with the project
            $delete_query = "DELETE FROM project_faculty WHERE project_id = '$project_id'";
            mysqli_query($con, $delete_query);

            // Insert newly selected faculty
            foreach ($_POST['faculty'] as $faculty_id) {
                $insert_query = "INSERT INTO project_faculty (project_id, faculty_id) VALUES ('$project_id', '$faculty_id')";
                mysqli_query($con, $insert_query);
            }
        }

        //Check if faculty array is empty, if it is delete

        $_SESSION['message'] = "Project has been updated";
        header('Location: project-edit.php?id=' . $project_id);
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: project-edit.php?id=' . $project_id);
        exit(0);
    }
}

// Delete Project
if (isset($_POST['project_delete_btn'])) {
    $project_id = $_POST['project_id'];

    // Delete project from the database
    $delete_query = "DELETE FROM projects WHERE id = '$project_id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    // Check if deletion was successful
    if ($delete_query_run) {
        // Redirect to project view page
        $_SESSION['message'] = "Project deleted successfully";
        header('Location: project-view.php');
        exit();
    } else {
        $_SESSION['message'] = "Error deleting project";
        header('Location: project-edit.php?id=' . $project_id);
        exit();
    }
}



//Delete project_faculty
if(isset($_POST['delete_project_faculty'])) 
{
    $faculty_id = $_POST['faculty_id'];
    $project_id = $_POST['project_id'];

    $query = "DELETE FROM project_faculty WHERE faculty_id = '$faculty_id' AND project_id = '$project_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Faculty Member has been Deleted For Project";
        header('Location: project-edit.php?id='.$project_id);
    }
}


//Delete Project Document
if(isset($_POST['delete_project_document'])) 
{
    $document_id = $_POST['document_id'];
    $project_id = $_POST['project_id'];

    $query = "DELETE FROM project_documents WHERE id = '$document_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = "Project Document has been Deleted";
        header('Location: project_details.php?id='.$project_id);
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: project_details.php?id='.$project_id);
        exit(0);
    }
}

///Add Article
if(isset($_POST['article_add_btn'])) {
    $thumb_nail_title = mysqli_real_escape_string($con, $_POST['thumb_nail_title']);
    $project_id = mysqli_real_escape_string($con, $_POST['project_id']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $thumb_nail_summary = mysqli_real_escape_string($con, $_POST['thumb_nail_summary']);

    // Image Upload
    $thumb_nail_pic = $_FILES['thumb_nail_pic']['name'];
    // Rename this image
    $image_extension = pathinfo($thumb_nail_pic, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_extension;

    // Insert the Article with the project_id
    $query = "INSERT INTO articles (thumb_nail_title, project_id, content, thumb_nail_summary, thumb_nail_pic) 
              VALUES ('$thumb_nail_title', '$project_id', '$content', '$thumb_nail_summary', '$filename')";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        // Upload the image to uploads folder
        move_uploaded_file($_FILES['thumb_nail_pic']['tmp_name'],'../uploads/articles/'.$filename);
        $_SESSION['message'] = "New Article has been added";
        header('Location: article-add.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: article-add.php');
        exit(0);
    }
}

// Update Article
if(isset($_POST['article_edit_btn'])) {
    $article_id = $_POST['article_id'];
    $thumb_nail_title = mysqli_real_escape_string($con, $_POST['thumb_nail_title']);
    $project_id = mysqli_real_escape_string($con, $_POST['project_id']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $thumb_nail_summary = mysqli_real_escape_string($con, $_POST['thumb_nail_summary']);

    // Get the old filename
    $old_filename = $_POST['old_thumb_nail_pic'];

    // Initialize filename variable
    $filename = $old_filename;

    // Check if a new thumbnail is being uploaded
    if(isset($_FILES['thumb_nail_pic']) && $_FILES['thumb_nail_pic']['error'] != UPLOAD_ERR_NO_FILE) {
        // New thumbnail is being uploaded, handle image processing
        $thumb_nail_pic = $_FILES['thumb_nail_pic']['name'];
        $image_extension = pathinfo($thumb_nail_pic, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_extension;
    }

    // Update the Article with the project_id
    $query = "UPDATE articles SET thumb_nail_title = '$thumb_nail_title', project_id = '$project_id', content = '$content', thumb_nail_summary = '$thumb_nail_summary'";
    
    // Check if a new thumbnail was uploaded and update the query accordingly
    if(isset($thumb_nail_pic)) {
        $query .= ", thumb_nail_pic = '$filename'";
    }
    
    $query .= " WHERE id = '$article_id'";
    
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        // Check if a new thumbnail was uploaded
        if(isset($thumb_nail_pic)) {
            // New thumbnail was uploaded, delete the old image
            if(file_exists('../uploads/articles/' . $old_filename)) {
                unlink('../uploads/articles/' . $old_filename);
            }
            // Upload the new image to uploads folder
            move_uploaded_file($_FILES['thumb_nail_pic']['tmp_name'], '../uploads/articles/' . $filename);
        }

        $_SESSION['message'] = "Article has been updated";
        header('Location: article-edit.php?id='.$article_id);
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: article-edit.php?id='.$article_id);
        exit(0);
    }
}

//Delete Article
if(isset($_POST['article_delete_btn'])) 
{
    $article_id = $_POST['id'];

    $check_img_query = "SELECT * FROM articles WHERE id = '$article_id' LIMIT 1";
    $img_res = mysqli_query($con, $check_img_query);
    $res_data = mysqli_fetch_all($img_res);

    $image = $res_data['thumb_nail_pic'];
   
    $query = "DELETE FROM articles WHERE id = '$article_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    

    if($query_run) {
            if(file_exists('../uploads/articles/'.$image)) 
            {
                unlink('../uploads/articles/'.$image);
            }

        $_SESSION['message'] = "Article has been Deleted";
        header('Location: article-view.php');
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: article-view.php');
        exit(0);
    }

}

//Add Gallery
if(isset($_POST['gallery_add_btn'])) {
    $project_id = mysqli_real_escape_string($con, $_POST['project_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);


    // Insert the Article with the project_id
    $query = "INSERT INTO gallery ( project_id, name) 
              VALUES ('$project_id', '$name')";
    $query_run = mysqli_query($con, $query);

    if($query_run) {

        $gallery_id = mysqli_insert_id($con); // Get the last inserted gallery_id


        // Debugging statement
        echo "<pre>";
        print_r($_FILES['gallery_photos']);
        echo "</pre>";

        // Upload multiple files
        if(isset($_FILES['pictures'])) {
            $file_count = count($_FILES['pictures']['name']);
            for($i = 0; $i < $file_count; $i++) {
                $file_name = $_FILES['pictures']['name'][$i];
                $file_tmp = $_FILES['pictures']['tmp_name'][$i];
                $file_type = $_FILES['pictures']['type'][$i];
                $file_size = $_FILES['pictures']['size'][$i];
                $file_error = $_FILES['pictures']['error'][$i];

                if($file_error === UPLOAD_ERR_OK) {
                    $file_destination = '../uploads/gallery_photos/' . $file_name;
                    if(move_uploaded_file($file_tmp, $file_destination)) {
                        // Insert file details into gallery_photos table
                        $query = "INSERT INTO gallery_photos (gallery_id ,project_id, file_name, file_type, file_size, file_path) 
                                  VALUES ('$gallery_id','$project_id', '$file_name', '$file_type', '$file_size', '$file_destination')";
                        $query_run = mysqli_query($con, $query);

                        if(!$query_run) {
                            $_SESSION['message'] = "Error inserting file details into database";
                            header('Location: gallery-add.php');
                        }
                    } else {
                        $_SESSION['message'] = "Error moving uploaded file to destination folder";
                        header('Location: gallery-add.php');
                    }
                } else {
                    $_SESSION['message'] = "Error uploading file: " . $_FILES['pictures']['name'][$i];
                    header('Location: gallery-add.php');
                }
            }
        } else {
            // Debugging statement
            echo "No pictures uploaded";
        }

        $_SESSION['message'] = "New Gallery has been added";
        header('Location: gallery-add.php');
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: gallery-add.php');
    }

}

// Edit Gallery
if(isset($_POST['gallery_edit_btn'])) {
    $gallery_id = mysqli_real_escape_string($con, $_POST['gallery_id']);
    $project_id = mysqli_real_escape_string($con, $_POST['project_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);

    // Update gallery details
    $update_query = "UPDATE gallery SET project_id = '$project_id', name = '$name' WHERE id = '$gallery_id'";
    $update_result = mysqli_query($con, $update_query);

    if($update_result) {
        // Check if new photos are being uploaded
        if(!empty($_FILES['pictures']['name'][0])) {
            $files = $_FILES['pictures'];

            foreach($files['name'] as $key => $file_name) {
                // File details
                $file_tmp = $files['tmp_name'][$key];
                $file_size = $files['size'][$key];
                $file_error = $files['error'][$key];

                // Handle file upload
                if($file_error === UPLOAD_ERR_OK) {
                    // Move uploaded file to the destination directory
                    $file_path = '../uploads/gallery_photos/' . $file_name;
                    move_uploaded_file($file_tmp, $file_path);

                    // Insert photo details into database
                    $insert_query = "INSERT INTO gallery_photos (gallery_id, project_id, file_name, file_path) VALUES ('$gallery_id', '$project_id', '$file_name', '$file_path')";
                    $insert_result = mysqli_query($con, $insert_query);

                    if(!$insert_result) {
                        $_SESSION['error'] = "Error inserting file details into database";
                        header('Location: gallery_edit.php?id='.$gallery_id);
                        exit;
                    }
                } else {
                    $_SESSION['error'] = "Error uploading file: " . $file_name;
                    header('Location: gallery_edit.php?id='.$gallery_id);
                    exit;
                }
            }
        }

        $_SESSION['message'] = "Gallery details updated successfully";
        header('Location: gallery-view.php');
        exit;
    } else {
        $_SESSION['error'] = "Failed to update gallery details";
        header('Location: gallery_edit.php?id='.$gallery_id);
        exit;
    }
}


// Delete Photos in Gallery
if(isset($_POST['delete_photo_btn'])) {
    $photo_id = $_POST['photo_id'];
    $gallery_id = $_POST['gallery_id'];

    // Retrieve the file path of the photo
    $photo_query = "SELECT * FROM gallery_photos WHERE id = '$photo_id'";
    $photo_query_run = mysqli_query($con, $photo_query);
    $photo_data = mysqli_fetch_assoc($photo_query_run);
    $photo_path = $photo_data['file_path'];

    // Delete photo record from the database
    $delete_query = "DELETE FROM gallery_photos WHERE id = '$photo_id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    // Delete photo file from the server directory
    if($delete_query_run) {
        if(file_exists($photo_path)) {
            unlink($photo_path); // Delete the file
        }
        $_SESSION['message'] = "Gallery Photo has been Deleted";
        header('Location: gallery-edit.php?id='.$gallery_id);
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        header('Location: gallery-edit.php?id='.$gallery_id);
        exit(0);
    }
}

// Delete Gallery
if(isset($_POST['gallery_delete_btn'])) {
    $gallery_id = mysqli_real_escape_string($con, $_POST['id']);

    // First, delete all associated photos from the database and unlink the files
    $delete_photos_query = "SELECT file_path FROM gallery_photos WHERE gallery_id = '$gallery_id'";
    $delete_photos_result = mysqli_query($con, $delete_photos_query);

    if($delete_photos_result) {
        while($row = mysqli_fetch_assoc($delete_photos_result)) {
            $file_path = $row['file_path'];
            // Unlink the file from the server
            if(file_exists($file_path)) {
                unlink($file_path);
            }
        }
        // Now delete associated photos from the database
        $delete_photos_query = "DELETE FROM gallery_photos WHERE gallery_id = '$gallery_id'";
        $delete_photos_result = mysqli_query($con, $delete_photos_query);

        if(!$delete_photos_result) {
            $_SESSION['error'] = "Error deleting gallery photos";
            header('Location: gallery-view.php');
            exit;
        }
    }

    // Next, delete the gallery from the database
    $delete_gallery_query = "DELETE FROM gallery WHERE id = '$gallery_id'";
    $delete_gallery_result = mysqli_query($con, $delete_gallery_query);

    if($delete_gallery_result) {
        $_SESSION['message'] = "Gallery deleted successfully";
        header('Location: gallery-view.php');
        exit;
    } else {
        $_SESSION['error'] = "Error deleting gallery";
        header('Location: gallery-view.php');
        exit;
    }
}








//Delete the user
if(isset($_POST['user_delete']))
{
    $user_id = $_POST['user_delete'];

    $query = "DELETE FROM users WHERE id = '$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User has been deleted";
        header('Location: view-register.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-register.php');
        exit(0);
    }
}

//Add the user
if(isset($_POST['add_user']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1' : '0';

    //Insert the user
    $query = "INSERT INTO users (fname, lname, email, password, role_as, status) VALUES ('$fname', '$lname', '$email', '$password', '$role_as', '$status')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "New User has been added";
        header('Location: view-register.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-register.php');
        exit(0);
    }
}

//Update the user
if(isset($_POST['update_user']))
{
    $user_id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1' : '0';

    //Update the user
    $query = "UPDATE users SET fname = '$fname', lname = '$lname', email = '$email', password = '$password', role_as = '$role_as', status = '$status' WHERE id = '$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User has been updated";
        header('Location: view-register.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: view-register.php');
        exit(0);
    }
    
}

//Add School Year
if(isset($_POST['add_school_year']))
{
    $school_year = $_POST['school_year'];

    //Insert the School Year
    $query = "INSERT INTO school_year (school_year) VALUES ('$school_year')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "New School Year has been added";
        header('Location: school_year-add.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: school_year-add.php');
        exit(0);
    }
}

//Update School Year
if(isset($_POST['update_school_year']))
{
    $school_year_id = $_POST['id'];
    $school_year = $_POST['school_year'];

    //UPDATE the School Year
    $query = "UPDATE school_year SET school_year = '$school_year' WHERE id = '$school_year_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "School Year has been Updated";
        header('Location: school_year-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location: school_year-edit.php');
        exit(0);
    }
}

//Logout the user
if(isset($_POST['logout_btn'])){
    //session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    unset($_SESSION['auth_role']);

    $_SESSION['message'] = "Logged Out Successfully";
    header('location: ../login.php');
    exit(0);
}
?>