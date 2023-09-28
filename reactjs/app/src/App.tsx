import { useState } from "react";
import { Alert } from "./components/Alert";
import Qwerty from "./components/qwerty";

function App() {
  const [alertvisible,setAlertVisible]=useState(false)
  return (
    <div>
      {alertvisible && <Alert onClose={() => setAlertVisible(false)}>My Alert</Alert>}
      <Qwerty onClick={() => setAlertVisible(true)} color="primary">
        My Button
      </Qwerty>
    </div>
  );
}

export default App;
