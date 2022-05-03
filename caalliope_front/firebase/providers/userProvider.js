import React, { Component, createContext } from "react";
import { auth } from "../firebase";

export const UserContext = createContext({ user: null });

class UserProvider extends Component {
  state = {
    user: null
  };

  componentDidMount = async () => {
    auth.onAuthStateChanged(async userAuth => {
      this.setState({ user: userAuth });
    });
  };

  render() {
    const { user } = this.state;

    return (
      <UserContext.Provider value={user}>
        {this.props.children}
      </UserContext.Provider>
    );
  }
}