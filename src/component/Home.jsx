import React, { useState } from "react";
// import Carousel from "react-bootstrap/Carousel";
// import ExampleCarouselImage from "./img.png";

function Home() {
  const [a, b] = useState({
    location: "",
    starttime: "",
    endtime: "",
  });

  const myfun = (e) => {
    // const aa = e.target.value ;
    let { value, name } = e.target;
    b((p) => {
      return {
        ...p,
        [name]: value,
      };
    });
  };

  return (
    <>
      <div className="main_hero">
        <div className="main_hero2_1">
          {/* <h1>hyyy</h1> */}

          <button className="btn" type="submit">
            View Cars {"->"}
          </button>
        </div>

        <div className="main_hero_form">
          <div>
            <img src="public/mycar.svg" alt="mycar" width='200px'/>
            <p>Car Rental in {a.location}</p>
          </div>

          <div className="form_file">
            <form>
              {/* <div className="inputfeelds"> */}
              <input
                type="text"
                placeholder="location"
                name="location"
                value={a.location}
                onChange={myfun}
              />
              <p>start-end time</p>

              <input
                type="datetime-local"
                name="starttime"
                id="startdatetime2"
                onChange={myfun}
              />

              <input
                type="datetime-local"
                name="endtime"
                id="startdatetime2"
                onChange={myfun}
              />

              {/* </div> */}
              <button className="btn" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </div>

      {/* <div>
        <h1>🏠🏠🏠🏠🏠🏠🏠🏠</h1>
        <h1>🏠🏠🏠🏠🏠🏠🏠🏠</h1>
        <h1>🏠🏠🏠🏠🏠🏠🏠🏠</h1>
        <h1>🏠🏠🏠🏠🏠🏠🏠🏠</h1>
      </div> */}
    </>
  );
}

export default Home;
