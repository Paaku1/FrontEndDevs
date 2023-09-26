function ListGroup() {
  const items = ["hehehehe", "hahahaha", "hohohohoh"];

  return (
    <>
      <h1>Welcome To React</h1>
      <ul className="list-group">
        {items.map((item) => (
          <li className="list-group-item" key={item}>
            {item}
          </li>
        ))}
      </ul>
    </>
  );
}

export default ListGroup;
