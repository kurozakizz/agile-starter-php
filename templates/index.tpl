<html>

<head>
    <title>PHP Starter for Agile Training</title>
</head>

<body>
    <h1>{$pageTitle}</h1>
    <p>{$pageContent}</p>

    <h2>Binding value from class</h2>
    <p>email:{$email}</p>

    <h2>Binding array using loop</h2>
    <ul>
    {loop $customers}
      <li>{$id} - {$name}</li>
    {/loop}
    </ul>

    <h2>Binding array using foreach</h2>
    <ul>
    {foreach $customers cust}
      <li>{$cust.id} - {$cust.name}</li>
    {/foreach}
    </ul>

    <h2>CRUD</h2>
    <p>Example <a href="list.php">here</a></p>

    <h2>Dwoo template engine</h2>
    <p>More information <a href="http://dwoo.org/plugins/" target="_blank">here</a></p>

    <h2>Bootstrap</h2>
    <p>More example <a href="http://getbootstrap.com/components/" target="_blank">here</a></p>
</body>

</html>
