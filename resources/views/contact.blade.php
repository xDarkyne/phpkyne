@extends('base')

@section('title', 'Darkyne | Contact')

@section('content')
    <section class="main-section">
        <div class="container">
            <div class="half-size-grid">
                <div class="half-section">
                    <h1 class="section-title">Send me a message...</h1>
                    @include('components/warning', ['title' => 'Warning!', 'message' => 'This form is not working properly yet.'])
                    <form action="POST">
                        <div class="form-group">
                            <label for="email">
                                Email
                            </label>
                            <input id="email" type="email" placeholder="your@email.com"></input>
                        </div>

                        <div class="form-group">
                            <label for="subject">
                                Subject
                            </label>
                            <input id="subject" type="text" placeholder="Subject"></input>
                        </div>

                        <div class="form-group">
                            <label for="message">
                                Message
                            </label>
                            <textarea id="message" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Send"></input>
                        </div>
                    </form>
                </div>

                <div class="half-section">
                    <h1 class="section-title">...Or choose another medium!</h1>
                    <div class="grid-4">
                        <a href="/discord" class="icon-button icon-button-discord"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9.593,10.971c-0.542,0-0.969,0.475-0.969,1.055c0,0.578,0.437,1.055,0.969,1.055c0.541,0,0.968-0.477,0.968-1.055	C10.572,11.445,10.134,10.971,9.593,10.971z M13.061,10.971c-0.542,0-0.969,0.475-0.969,1.055c0,0.578,0.437,1.055,0.969,1.055	c0.541,0,0.968-0.477,0.968-1.055C14.028,11.445,13.602,10.971,13.061,10.971z"/><path d="M17.678,3H4.947C3.874,3,3,3.874,3,4.957v12.844c0,1.083,0.874,1.957,1.947,1.957h10.773l-0.505-1.759l1.217,1.131	l1.149,1.064L19.625,22V4.957C19.625,3.874,18.751,3,17.678,3z M14.01,15.407c0,0-0.342-0.408-0.626-0.771	c1.244-0.352,1.719-1.13,1.719-1.13c-0.39,0.256-0.76,0.438-1.093,0.562c-0.475,0.198-0.93,0.331-1.377,0.408	c-0.912,0.17-1.748,0.123-2.461-0.01c-0.541-0.105-1.006-0.257-1.396-0.41c-0.218-0.085-0.457-0.188-0.693-0.321	c-0.029-0.021-0.057-0.029-0.085-0.048c-0.02-0.01-0.029-0.019-0.039-0.03c-0.171-0.094-0.266-0.16-0.266-0.16	s0.456,0.76,1.663,1.121c-0.285,0.36-0.637,0.789-0.637,0.789c-2.099-0.067-2.896-1.444-2.896-1.444	c0-3.059,1.368-5.538,1.368-5.538c1.368-1.027,2.669-0.998,2.669-0.998l0.095,0.114c-1.71,0.495-2.499,1.245-2.499,1.245	s0.21-0.114,0.561-0.275c1.016-0.446,1.823-0.57,2.156-0.599c0.057-0.009,0.105-0.019,0.162-0.019	c0.58-0.076,1.235-0.095,1.918-0.019c0.903,0.105,1.873,0.371,2.86,0.912c0,0-0.751-0.712-2.366-1.206l0.133-0.152	c0,0,1.302-0.029,2.669,0.998c0,0,1.368,2.479,1.368,5.538C16.917,13.963,16.11,15.34,14.01,15.407z"/></svg>
                        </a>
                        <a href="mailto:dev@darkyne.com" class="icon-button icon-button-mail">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20,4H6C4.897,4,4,4.897,4,6v5h2V8l6.4,4.8c0.178,0.133,0.389,0.2,0.6,0.2s0.422-0.067,0.6-0.2L20,8v9h-8v2h8 c1.103,0,2-0.897,2-2V6C22,4.897,21.103,4,20,4z M13,10.75L6.666,6h12.668L13,10.75z"/><path d="M2 12H9V14H2zM4 15H10V17H4zM7 18H11V20H7z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
