<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_org']))
{
    $FK1 = mysqli_real_escape_string($con, $_POST['delete_org']);

    $query = "DELETE FROM org WHERE FK1='$FK1' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Organization/Group Deleted Successfully";
        header("Location: org_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Organization/Group Not Deleted";
        header("Location: org_admin.php");
        exit(0);
    }
}

if(isset($_POST['delete_member']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_member']);

    $query = "DELETE FROM mem WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Deleted Successfully";
        header("Location: mem_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Deleted";
        header("Location: mem_admin.php");
        exit(0);
    }
}

if(isset($_POST['delete_event']))
{
    $eventid = mysqli_real_escape_string($con, $_POST['delete_event']);

    $query = "DELETE FROM events WHERE eventid='$eventid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Event Deleted Successfully";
        header("Location: event_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Event Not Deleted";
        header("Location: event_admin.php");
        exit(0);
    }
}

if(isset($_POST['delete_initiative']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_initiative']);

    $query = "DELETE FROM initiatives WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Initiative Deleted Successfully";
        header("Location: initiative_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Initiative Not Deleted";
        header("Location: initiative_admin.php");
        exit(0);
    }
}

if(isset($_POST['update_org']))
{
    $FK1 = mysqli_real_escape_string($con, $_POST['FK1']);

    $org = mysqli_real_escape_string($con, $_POST['org']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $socialmedia = mysqli_real_escape_string($con, $_POST['socialmedia']);

    $query = "UPDATE org SET org='$org', city='$city', state='$state', email='$email', socialmedia='$socialmedia' WHERE FK1='$FK1' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Organization/Group Updated Successfully";
        header("Location: org_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Organization/Group Not Updated";
        header("Location: org_edit.php");
        exit(0);
    }

}

if(isset($_POST['update_mem']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $member = mysqli_real_escape_string($con, $_POST['member']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $query = "UPDATE mem SET member='$member', contact='$contact' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Member Updated Successfully";
        header("Location: mem_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Updated";
        header("Location: mem_edit.php");
        exit(0);
    }

}

if(isset($_POST['update_event']))
{
    $eventid = mysqli_real_escape_string($con, $_POST['eventid']);

    $Events = mysqli_real_escape_string($con, $_POST['Events']);
    $Description = mysqli_real_escape_string($con, $_POST['Description']);
    $Date = mysqli_real_escape_string($con, $_POST['Date']);
    $Website = mysqli_real_escape_string($con, $_POST['Website']);

    $query = "UPDATE events SET Events='$Events', Description='$Description', Date='$Date', Website='$Website' WHERE eventid='$eventid' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Event Updated Successfully";
        header("Location: event_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Event Not Updated";
        header("Location: event_edit.php");
        exit(0);
    }

}

if(isset($_POST['update_initiative']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $start = mysqli_real_escape_string($con, $_POST['start']);
    $end = mysqli_real_escape_string($con, $_POST['end']);

    $query = "UPDATE initiatives SET title='$title', description='$description', start='$start', end='$end' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Initiative Updated Successfully";
        header("Location: initiative_admin.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Initiative Not Updated";
        header("Location: initiative_edit.php");
        exit(0);
    }

}


if(isset($_POST['save_member']))
{
    $member = mysqli_real_escape_string($con, $_POST['member']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $query = "INSERT INTO mem (member,contact) VALUES ('$member','$contact')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Member Created Successfully";
        header("Location: members.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Member Not Created";
        header("Location: members.php");
        exit(0);
    }
}

if(isset($_POST['save_org']))
{
    $org = mysqli_real_escape_string($con, $_POST['org']);
    $url = mysqli_real_escape_string($con, $_POST['url']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $socialmedia = mysqli_real_escape_string($con, $_POST['socialmedia']); 

    $query = "INSERT INTO org (org, url, city, state, email, socialmedia) VALUES ('$org', '$url', '$city', '$state', '$email', '$socialmedia')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Organization/Group Created Successfully";
        header("Location: organizations.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Organization/Group Not Created";
        header("Location: org_create.php");
        exit(0);
    }
}

if(isset($_POST['save_event']))
{
    $Events = mysqli_real_escape_string($con, $_POST['Events']);
    $Description = mysqli_real_escape_string($con, $_POST['Description']);
    $Date = mysqli_real_escape_string($con, $_POST['Date']);
    $Website = mysqli_real_escape_string($con, $_POST['Website']); 

    $query = "INSERT INTO events (Events, Description, Date, Website) VALUES ('$Events', '$Description', '$Date', '$Website')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Event Created Successfully";
        header("Location: events.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Event Not Created";
        header("Location: event_create.php");
        exit(0);
    }
}

if(isset($_POST['save_initiative']))
{
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $start = mysqli_real_escape_string($con, $_POST['start']);
    $end = mysqli_real_escape_string($con, $_POST['end']); 

    $query = "INSERT INTO initiatives (title, description, start, end) VALUES ('$title', '$description', '$start', '$end')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "initiative Created Successfully";
        header("Location: initiatives.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "initiative Not Created";
        header("Location: initiative_create.php");
        exit(0);
    }
}

?>  