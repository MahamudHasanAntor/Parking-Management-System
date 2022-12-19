import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

class AxioGet extends Component {
  state = {
        resources: []
      }
    
      componentDidMount() {
        axios.get('http://localhost:8000/api/nuser')
        .then(response => {
          const resources = response.data;
          this.setState({resources});
         
        })
      }
   
        render(){
          return(
              <table class="table">
              <thead>
                  <tr class="bg-danger">
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Car ID</th>
                  </tr>
              </thead>
              <tbody>
                  {this.state.resources && this.state.resources.map(resource => 
                      <tr>
                          <td scope="row">{resource.first_name}</td>
                          <td>{resource.last_name}</td>
                          <td>{resource.address}</td>
                          <td>{resource.carid}</td>
                      </tr>)}
              </tbody>
          </table>
  
          )
      }



}
  
  export default AxioGet;
  
if (document.getElementById('axioget')) {
  const Index = ReactDOM.createRoot(document.getElementById("axioget"));

  Index.render(
      <React.StrictMode>
          <AxioGet/>
      </React.StrictMode>
  )
}