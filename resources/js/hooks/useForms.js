import { useState, useEffect } from 'react';
import axios from 'axios';

const useForms = () => {
    const [forms, setForms] = useState([]);
    const [error, setError] = useState(null);
    const [loading, setLoading] = useState(true);

    useEffect(() => {
        axios
            .get('http://kudo.local/api/forms-view')
            .then((response) => {
                setForms(response.data);
                setLoading(false);
            })
            .catch((error) => {
                setError(error.message);
                setLoading(false);
            });
    }, []);

    const addForm = (newForm) => {
        setForms((prevForms) => [...prevForms, newForm]);
    };

    return { forms, error, loading, addForm };
};

export default useForms;
