<x-mail::message>
Sender: {{$data['name']}} <br>
Email: {{$data['email']}} <br>
Subject: {{$data['subject']}} <br>
Message: {{$data['message']}} <br>
<x-mail::button :url="''">
Verify
</x-mail::button>

Thanks,<br>
{{ $data['name'] }}
</x-mail::message>
