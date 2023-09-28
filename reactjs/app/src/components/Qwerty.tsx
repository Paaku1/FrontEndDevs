import { ReactNode } from "react";

interface Props {
  children: ReactNode;
  onClick: () => void;
  color: string;
}

const Qwerty = ({ children, onClick, color }: Props) => {
  return (
    <>
      <button className={"btn btn-" + color} onClick={onClick}>
        {children}
      </button>
    </>
  );
};

export default Qwerty;
