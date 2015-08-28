<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">   
<html xmlns="http://www.w3.org/1999/xhtml" class="grey">
  <head>
      <meta charset="utf-8">
      <title>Fathom Development</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
      <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.20/themes/vader/jquery-ui.css"></link>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
      <!-- bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css "></link>
  </head>
  <body>
    <div class="col-sm-4 col-sm-offset-4">
        <div class="fathom">
            &nbsp;
        </div>
        <div class="statement">
            <h1>Begin your development project.</h1>
            <p>Send your request or quote in under 60 seconds. Alternatively, you can also send us an email at <a href="mailto:dev@fathomdelivers.com?subject=New%20Project">dev@fathomdelivers.com</a></p>
        </div>
        <div id="box_form">
          <form id="zFormer" method="post" action="handler.php" name="zFormer">
            <div class="field-wrapper">
              <label for="z_subject">Your Project</label>
              <input type="text" name="z_subject" class="form-control" autofocus required />
              <div class="help-block">What is this project called?</div>
            </div>
            <div class="field-wrapper">
              <label for="z_name">Your Name</label>
              <input type="text" name="z_name" class="form-control" required/>
              <div class="help-block">What is your full name?</div>
            </div>
            <div class="field-wrapper">
              <label for="z_requester">Your Email Address</label>
              <input type="text" name="z_requester" class="form-control" required/>
              <div class="help-block">What's your email?</div>
            </div>
            <div class="field-wrapper">
              <label for="z_priority">Project Priority</label>
              <select name="z_priority" class="form-control">
                <option value="" disabled selected></option>
                <option value="Very High">Ugent</option>
                <option value="High">High</option>
                <option value="Medium">Normal</option>
                <option value="Low">Low</option>
              </select>
              <div class="help-block">What's the priority?</div>
            </div>
            <div class="field-wrapper">
              <label for="z_date">Target Launch Date</label>
              <input type="text" name="z_date" class="form-control">
              <div class="help-block">If you don't have a date, estimate.</div>
            </div>
            <div class="field-wrapper">
              <label for="z_type">Project Type</label>
              <select name="z_type" class="form-control" required>
                <option value="" disabled selected></option>
                <option value="Bug Fix">Bug Fix</option>
                <option value="Design / Redesign">Design / Redesign</option>
                <option value="Edit">Edit</option>
                <option value="Feature Development">Feature Development</option>
                <option value="Quote">Quote</option>
                <option value="Other">Other</option>
              </select>
              <div class="help-block">What category does this fall into?</div>
            </div>
            <div class="field-wrapper">
              <label for="z_description">Description of Project</label>
              <textarea name="z_description" class="form-control" required></textarea>
              <div class="help-block">Be as detailed as possible. The more information, the better.</div>
            </div>
            <input type="submit" class="btn btn-info" value="Send My Request">
          </form>
        </div>
        <div class="footer">
          <hr />
          <p>Copyright &copy; <?php echo date("Y");?> Fathom</p>
        </div>
    </div>
  </body>
</html>