<div  class=" speech-bubble-sent float-right text-center" style="width: 40%;">
        <h4 >Me:</h4>
        <p >{{ $message->message }}</p>
        <small class="h6 card-text float-left" >Sent at: <label class="text-muted">{{ date('Y-m-d h:i', strtotime($message->created_at)) }}</label></small>

    <small class="h6 card-text float-right"><label class="text-muted">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($message->created_at))->diffForHumans() }}</label>
        </small>
</div>
<br>
<br>
<br>
<br>
<br>
<br>



