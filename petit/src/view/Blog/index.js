import React, { Component } from "react";
import Header from "../../components/Header";
import Cards from "../../components/Cards";
import Footer from "../../components/Footer";

class Blog extends Component {
  render() {
    return (
      <div>
        <Header />
        <div className="container">
          <Cards />
          <Cards />
        </div>
        <Footer />
      </div>
    );
  }
}

export default Blog;
