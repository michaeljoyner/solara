<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
    <h2>Solara Asia Quote Request</h2>
    <p>From: {{ $quoteRequest['contact_person'] }}</p>
    <p>Email: {{ $quoteRequest['email'] }}</p>
    <p>Country: {{ $quoteRequest['country'] }}</p>
    <p>Skype/Phone: {{ $quoteRequest['phone'] }}</p>
    <h3>Request:</h3>
    <p>{{ $quoteRequest['message_body'] }}</p>

    @if(isset($imageFiles) && count($imageFiles) > 0)
        <p>{{ count($imageFiles) }} image file(s) were uploaded. See attachments.</p>
    @endif

    @if(isset($docFiles) && count($docFiles) > 0)
        <p>{{ count($docFiles) }} doc file(s) were uploaded. See attachments.</p>
    @endif

</body>
</html>