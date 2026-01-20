CREATE TABLE users (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY ,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(255)   NOT NULL UNIQUE,
    possword TEXT        NOT NULL,
    created_at TIMESTAMP DEFAULT NOW()
);




CREATE TABLE survey_responses (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INT NOT NULL,
    -- Phase 1 (signup)
    age_range VARCHAR(10) NOT NULL,
    main_goal VARCHAR(50) NOT NULL,
    employment_status VARCHAR(50) NOT NULL,
    work_schedule VARCHAR(50) NOT NULL,
    ai_confidence VARCHAR(50) NOT NULL,
    daily_time_investment VARCHAR(20) NOT NULL,
    -- Phase 2 (post-signup, optional)
    financial_feeling VARCHAR(50),
    work_issues TEXT[],              -- multi-select
    interest_areas TEXT[],           -- multi-select
    dream_goal VARCHAR(50),

    created_at TIMESTAMP DEFAULT NOW(),
    
    CONSTRAINT fk_survey_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE
);

CREATE TABLE user_skills (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INT NOT NULL,
    skill_name VARCHAR(50),
    mastery SMALLINT NOT NULL,
    category VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT NOW(),
    
    CONSTRAINT fk_skills_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE
);

CREATE TABLE opportunities (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    required_skill VARCHAR(100),
    money_gain NUMERIC(12,2),
    link VARCHAR(255),
    status ENUM('not_started', 'in_progress', 'completed') NOT NULL DEFAULT 'not_started',
    created_at TIMESTAMP DEFAULT NOW(),

    CONSTRAINT fk_opportunity_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE
);

CREATE TABLE ai_plans (
    id NT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    opportunity_id INT NOT NULL,
    user_id BIGINT NOT NULL,
    title VARCHAR(150) NOT NULL,
    goal TEXT,
    aimed_skills TEXT[],
    start_date DATE NOT NULL,
    end_date DATE,
    created_at TIMESTAMP DEFAULT NOW(),

    CONSTRAINT fk_ai_plan_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE,
    CONSTRAINT fk_ai_plan_opp
        FOREIGN KEY (opportunity_id)
        REFERENCES opportunities(id)
        ON DELETE CASCADE
);

CREATE TABLE daily_tasks (
    id BIGSERIAL PRIMARY KEY,
    plan_id BIGINT NOT NULL,
    name VARCHAR(150) NOT NULL,
    user_submission TEXT,
    ai_feedback TEXT,
    task_date DATE NOT NULL,
    status VARCHAR(20) DEFAULT 'not_started',
    task_order SMALLINT,
    created_at TIMESTAMP DEFAULT NOW(),

    CONSTRAINT fk_task_plan FOREIGN KEY (plan_id) REFERENCES ai_plans(id) ON DELETE CASCADE
);

CREATE TABLE articles (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INT NOT NULL,
    image_name VARCHAR(255),
    title VARCHAR(150) NOT NULL,
    description TEXT,
    body TEXT NOT NULL,
    uploaded_at TIMESTAMP DEFAULT NOW(),

    CONSTRAINT fk_article_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE
);


CREATE TABLE likes (
    id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
    user_id INT NOT NULL,
    article_id BIGINT NOT NULL,
    liked_at TIMESTAMP DEFAULT NOW(),

    CONSTRAINT fk_likes_user
        FOREIGN KEY (user_id)
        REFERENCES users(id)
        ON DELETE CASCADE,
    CONSTRAINT fk_likes_article
        FOREIGN KEY (article_id)
        REFERENCES articles(id)
        ON DELETE CASCADE,

    CONSTRAINT unique_user_article UNIQUE (user_id, article_id)
);


ALTER TABLE users RENAME COLUMN possword TO password;
ALTER TABLE users RENAME COLUMN username TO name;
