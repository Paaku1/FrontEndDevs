import { useState } from "react";

interface props {
  items: string[];
  head: string;
  onSelectItem: (item: string) => void;
}

function ListGroup({ items, head , onSelectItem}: props) {
  const msg = items.length === 0 && <p>No Item Found</p>;

  const [selectedIndex, setSelectedIndex] = useState(-1);

  return (
    <>
      <h1>{head}</h1>
      {msg}
      <ul className="list-group">
        {items.map((item, index) => (
          <li
            className={
              selectedIndex === index
                ? "list-group-item active"
                : "list-group-item"
            }
            key={item}
            onClick={() => {
              setSelectedIndex(index);
              onSelectItem(item);
            }}
          >
            {item}
          </li>
        ))}
      </ul>
    </>
  );
}
/*<ListGroup items={items} head="Welcome To React List" onSelectItem={handleSelect}/> 
const items = ["hehehehe", "hahahaha", "hohohohoh"];
const handleSelect = (item:string) => {
console.log(item);
}*/
//App.tsx
export default ListGroup;
