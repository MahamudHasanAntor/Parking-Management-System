// import React from 'react';
// import ReactDOM from 'react-dom';

// export default function HelloReact() {
//     return (
//         <h1>Hello React!</h1>
//     );
// }

// if (document.getElementById('hello-react')) {
//     ReactDOM.render(<HelloReact />, document.getElementById('hello-react'));
// }

import React from 'react';
import ReactDOM from 'react-dom';

// function Myreact() {
//     return (
//         <table>
//         <tr>
//           <th>Name</th>
//         </tr>
//         <tr>
//           <td>John</td>
//         </tr>
//         <tr>
//           <td>Elsa</td>
//         </tr>
//       </table>
//     );
  
// }
// export default Myreact;

// if (document.getElementById('root')) {
//     const Index = ReactDOM.createRoot(document.getElementById("root"));

//     Index.render(
//         <React.StrictMode>
//             <Myreact/>
//         </React.StrictMode>
//     )
//     }

// function MyForm() {
//     return (
//       <form>
//         <label>Enter your name:
//           <input type="text" />
//         </label>
//       </form>
//     )
//   }
//   const root = ReactDOM.createRoot(document.getElementById('root'));
//   root.render(<MyForm />);
function Car(props) {
    return <li>I am a { props.brand }</li>;
  }
  
  function Garage() {
    const cars = [
      {id: 1, brand: 'Ford'},
      {id: 2, brand: 'BMW'},
      {id: 3, brand: 'Audi'}
    ];
    return (
      <>
        <h1>Who lives in my garage?</h1>
        <ul>
          {cars.map((car) => <Car key={car.id} brand={car.brand} />)}
        </ul>
      </>
    );
  }
  
  const root = ReactDOM.createRoot(document.getElementById('root'));
  root.render(<Garage />);