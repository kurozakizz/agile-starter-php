<html>

<head>
  <title>Example CRUD</title>
  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <h2>Manage Customer</h2>
        <a class="btn btn-primary pull-right" href="add.php">Add Customer</a>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th width="150">ID</th>
              <th>Name</th>
              <th width="100"></th>
              <th width="100"></th>
            </tr>
          </thead>
          <tbody>
            {foreach $customers cust}
            <tr>
              <td>{$cust->getId()}</td>
              <td>{$cust->getName()}</td>
              <td align="right"><a class="btn btn-default btn-sm btn-block" href="edit.php?id={$cust->getId()}">Edit</a></td>
              <td align="right"><a class="btn btn-danger btn-sm btn-block" href="remove.php?id={$cust->getId()}">Remove</a></td>
            </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
