<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Date</th>
        <th scope="col">Player Id</th>
        <th scope="col">Agent ID</th>
        <th scope="col">Currency</th>
        <th scope="col">Bet</th>
        <th scope="col">Win</th>
        <th scope="col">Rake</th>
        <th scope="col">Tournament</th>
        <th scope="col">Net</th>
        <th scope="col">Fin</th>
        <th scope="col">Aams ticket</th>
        <th scope="col">Aams_table</th>
        <th scope="col">Aams_table</th>
    </tr>
    </thead>
    <tbody>

   @foreach($data as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->date}}</td>
        <td>{{$item->playerId}}</td>
        <td>{{$item->agentId}}</td>
        <td>{{$item->currency}}</td>
        <td>{{$item->bet ?? '---'}}</td>
        <td>{{$item->win ?? '---'}}</td>
        <td>{{$item->rake ?? '---'}}</td>
        <td>{{$item->tournament ?? '---'}}</td>
        <td>{{$item->net}}</td>
        <td>{{$item->fin ?? '---'}}</td>
        <td>{{$item->aams_ticket}}</td>
        <td>{{$item->aams_table}}</td>
    </tr>
   @endforeach
    </tbody>
</table>

</body>
</html>
