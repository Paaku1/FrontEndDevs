import { ReactNode } from "react";

interface Props {
  children: ReactNode;
  onClose: () => void;
}


export const Alert = ({ children, onClose }: Props) => {
  return (
    <>
      <div className="alert alert-primary alert-dismissible" onClick={onClose}>
        {children}
        
        <button
          type="button"
          className="btn-close"
          data-bs-dismiss="alert"
          aria-label="Close"
        ></button>
      </div>
    </>
  );
};
