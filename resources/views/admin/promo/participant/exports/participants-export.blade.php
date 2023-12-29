<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>K8 Username</td>
        <td>Email</td>
        <td>SNS ID</td>
        <td>Participant IP</td>
        <td>Joined date</td>
        <td>Retweet URL</td>
        <td>Comment</td>
        <td>Is winner?</td>
        @foreach($questions as $item)
            <td>{{$item->question}}</td>
        @endforeach
    </tr>
    @foreach($participants as $participant)
        <tr>
            <td>{{$participant->id}}</td>
            <td>{{$participant->name}}</td>
            <td>{{$participant->k8_username}}</td>
            <td>{{$participant->email}}</td>
            <td>{{$participant->preferred_platform}}</td>
            <td>{{$participant->participant_ip}}</td>
            <td>{{$participant->created_at}}</td>
            <td>{{$participant->retweet_url}}</td>
            <td>{{$participant->comment}}</td>
            <td>{{$participant->winner}}</td>
            @foreach ($participant->choices as $item)
                <td>{{$item->choice}}</td>
            @endforeach
        </tr>
    @endforeach
</table>