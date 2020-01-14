import React from "react";
import "./styles/styles.css";
export default function index() {
  return (
    <div>
      <footer>
        <div className="container">
          <div className="row">
            <div>
              <ul className="menu">
                <div className="col-md-1 offset-md-4">
                  <li>
                    <a href="#">Home</a>
                  </li>
                </div>
                <div className="col-md-1">
                  <li>
                    <a href="#">About</a>
                  </li>
                </div>

                <div className="col-md-1">
                  <li>
                    <a href="#">Blog</a>
                  </li>
                </div>

                <div className="col-md-1">
                  <li>
                    <a href="#">Gallery</a>
                  </li>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </footer>

      <div className="copyright">
        <div className="container">
          <div className="row text-center">
            <p>Copyright © 2017 All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
  );
}
