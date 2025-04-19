CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    full_name VARCHAR(255) NOT NULL,
    cpf VARCHAR(255) UNIQUE,
    phone VARCHAR(255),
    terms_of_user TIMESTAMP,
    is_actived BOOLEAN
)

CREATE TABLE role (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE
)

CREATE TABLE user_role (
    user_id INT NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id)
    FOREIGN KEY (role_id) REFERENCES role(id)
)