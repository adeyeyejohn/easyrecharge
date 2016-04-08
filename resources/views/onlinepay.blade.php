

{{env('GATEWAYURL')}}

{{ $trans }}<br>
{{ $amount }}<br>
<?php
$responseurl ='http://localhost:8000';
$concatString = env('MERCHANTID') . env('SERVICETYPEID') . $trans . $amount . $responseurl . env('APIKEY');
$hash = hash('sha512', $concatString);



?>

{{$hash}}

<p>You will be redirected to Remita in few seconds.......</p>
<form action="{{env('GATEWAYURL')}}" id="remita_form" name="remita_form" method="POST">
    <input id="merchantId" name="merchantId" value="{{env('MERCHANTID')}}" type="hidden"/>
    <input id="serviceTypeId" name="serviceTypeId" value="{{env('SERVICETYPEID')}}" type="hidden"/>
    <input id="amt" name="amt" value="{{ $amount }}" type="hidden"/>
    <input id="responseurl" name="responseurl" value="{{$responseurl}}" type="hidden"/>
    <input id="hash" name="hash" value="{{$hash}}" type="hidden"/>
    <input id="payerName" name="payerName" value="Tunde O" type="hidden"/>
    <input id="payerEmail" name="payerEmail" value="email@email.com" type="hidden"/>
    <input id="payerPhone" name="payerPhone" value="{{$phone}}" type="hidden"/>
    <input id="orderId" name="orderId" value="{{$trans}}" type="hidden"/>
</form>
--<script type="text/javascript">document.getElementById("remita_form").submit();</script>