<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href='https://github.com/knuckleswtf/pastel'>Documentation powered by Pastel 🎨</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: May 9 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.5.3.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Endpoints</h1>
<h2>Login User</h2>
<p>This endpoint lets you verify a user by phone number. In case of user phone no exsists It will return the data of the user with token to access the later.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/login"
);

let params = {
    "phone": "quisquam",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "user_status": true,
    "user": [
        {
            "id": 1,
            "name": "Abdul Rehman",
            "email": "abdurrehman@hwryk.com",
            "phone": "324234234"
        }
    ],
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiYWU4M2NlMmIzYzdjZTU4ZWRhNDlmNTY5OTdhYzg2YjcxMjUzYjFkNTBmNDRjMzcyNTk0NmZhZjFiYTNlY2I4ODFiNzcwZjc3MDAyNDllM2QiLCJpYXQiOjE2MjA1NTgwNjYuMTA1NzY5LCJuYmYiOjE2MjA1NTgwNjYuMTA1Nzc2LCJleHAiOjE2NTIwOTQwNjYuMDg4MzU5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.J5xJ5xeK5oJgGe4wMWBiK0qkHajPGF_iwZVm9oILUCY4_y_EZQYHD_pxJngkPOCOGWYskuHHt3Gm6ZDizhaUNB_WZLGHXqy3hP0wD4NZSOhM_O2hinMgSqMsN9uyAOr60BzfFw3B0s-1VJYiKwLOyLj2r8yUrV9JscttHEWk5lT1fvrDIdZZw6x1kJBGKLoD5JsKp8T-7-1wqDP0UlW2tzLp6BjjMfTUcRZei7Vnc5_0YWBcnV_0poQc_dO2ViK-1Tcob7kfStzkHQwuC7Y57r7tHe6wlL5LybQz70I7sLUwm5hb3XwuxWLXC3F-UKYAaHSqMKHVFr45CJ-q5IQsujusUtidlCMRdaKpNbiVS8kX2icpM5DAeAQkKEf6GkA9Yo4DaBSTtwhkGbNoJL6W5-wI4I0i6h-1U4vULHeXKH-JK3XcPD3H6cpxd7tDM1oHoWz2QdQGiuE5TtoblfgGEmO37iA9LtdYc82phZJlYLytD-mh_iHt7TcYUozFAKUnVnLq0XOc77iZCgGs4t1rqBUeXw5dFTvLFPJ3EmXgc2t6xLOlDvr_l0lnObCd8cTmh9nlcELMCBihkYUkbQ0oZxNpqXpc_MH-yXdMyxzX6MUrcN6FTlVOpRLKMW4Izo55KjrWaGLtxlkSagYVrcdXqa0zwuOXvDZDayJ5XgK9X1Q"
}</code></pre>
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-login" data-component="query"  hidden>
<br>
Field to check phone number exists or not.
</p>
</form>
<h2>Register a new User</h2>
<p>This endpoint lets you register a user by verifying user phone number first. It will return the data of the registered user with token to access the later.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/register"
);

let params = {
    "name": "dolores",
    "email": "est",
    "username": "consequatur",
    "phone": "illo",
    "vehicle_name": "aut",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "user_status": true,
    "user": [
        {
            "id": 5,
            "name": "Khawar Waraich",
            "email": "khawarsq1s@hwryk.com",
            "phone": "324234234"
        }
    ],
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNTJjY2MxYTZhMjk5ZjYzNGY4NTZjNGIyOTA1YmQ0YzcyZTRhNzExNGZjNzllY2RhYjZkMzAwZDg5OWI0NTE5OTZkNDE0Mzk0ZDdjMzhlOTAiLCJpYXQiOjE2MjA1NTg4NzQuOTc5MTQ1LCJuYmYiOjE2MjA1NTg4NzQuOTc5MTQ5LCJleHAiOjE2NTIwOTQ4NzQuOTc2NTU5LCJzdWIiOiI1Iiwic2NvcGVzIjpbXX0.jweiBKnb6YK6J9X79bVduFYsUGtXx8GcCwmMDq9cK4PrYUcr6doKMw-Pd-90q5Kg8xz6m2kttqfx1H95YZtanLxdCDVnL0KvuxaVuvcWLeFmkRj9J74zDDxFf7j881zcVtm_KJXsiSpwoLDnjt8B9ULIUJledy-eGMOol19kCMnEoh7GuQqrnzRk9zgyhmn0pvk76bHvROvEmdAcGvbOhdhs7aZsXOxi8Yvgi6q4Cym9fgOoomGxOkZUoYCH_D0gR0opnsNduQiU7X7zzkEsVu9hHEXBq3wpdCGBXenHAJ2sAtdPpIdJ6PZJLJ4CxVuGdz52ynqfs2qYFFcbfYMPWQalXVZSaHSRPUJGoG3kwjAo4WbQ1WjXZzhLlKCF3rk9k-9nZIAmz100CqCfuqfdqtFFOMtLYCvoy7JH8uGcfBwu0D3LwLnAZ-hG1YgRewNEt6G3k1jqKHjj1yxrjJWULDDXKGpDF1NqsM0PSYuQdgFpN-0io5wuiw2IHYHiNRT1otS54L-4yQKtzpY8LMZOva_YxZrxZUkn1u8OZJuicNd7ufP5jqzzPM7OERHD4pgd5RoIgJ1pGhZ67vdvH8USYasXHgMy2bY0MU9MGtPqYPUdRtq2RJHPHoodplpHP3lfk3hS6gKY4cUqDT3LnyQguO4NG-TJnt80QTQ1PetyDhc"
}</code></pre>
<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTapi-register" data-component="query" required  hidden>
<br>
Fullname of the User.
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-register" data-component="query" required  hidden>
<br>
email Email of the user must be unique.
</p>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTapi-register" data-component="query" required  hidden>
<br>
Username should be unique.
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-register" data-component="query" required  hidden>
<br>
Phone number of user must be valid format.
</p>
<p>
<b><code>vehicle_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="vehicle_name" data-endpoint="POSTapi-register" data-component="query" required  hidden>
<br>
string Vehicle Name of the user.
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>