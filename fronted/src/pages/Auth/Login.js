import React from 'react';

const Login = () => {
  return (
    <form>
    <div>

        <h1>holaaa</h1>
    </div>
      <div>
        <label>Email:</label>
        <input type="email" required />
      </div>
      <div>
        <label>Password:</label>
        <input type="password" required />
      </div>
      <button type="submit">Login</button>
    </form>
  );
};

export default Login;
