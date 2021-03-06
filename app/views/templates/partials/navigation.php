{% if auth %}
  Hello, {{auth.getFullNameOrUsername}}!
  <img src="{{ auth.getAvatarUrl({size: 30}) }}" alt="Your avatar" />
{% endif %}

<ul>
  <li><a href="{{ urlFor('home') }}">Home</a></li>

  {% if auth %}
    <li><a href="{{ urlFor('logout') }}">Log out</a> </li>
    <li><a href="{{ urlFor('user.profile', {username: auth.username}) }}">Your Profile</a> </li>
    <li><a href="{{ urlFor('user.all') }}">All Users</a> </li>
    <li><a href="{{ urlFor('account.profile')}}">Update Profile</a> </li>
    <li><a href="{{ urlFor('password.change')}}">Change Password</a> </li>
    {%if auth.isAdmin %}
      <li><a href="{{ urlFor('admin.example') }}">Admin area</a> </li>
    {% endif %}
  {% else %}
    <li><a href="{{ urlFor('register') }}">Register</a> </li>
    <li><a href="{{ urlFor('login') }}">Login</a> </li>
  {% endif %}
</ul>