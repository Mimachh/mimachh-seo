import { Input } from "@/Components/ui/input";
import { Textarea } from "@/Components/ui/textarea";
import FormFieldLayout from "@/Pages/Auth/Partials/Form/form-field-layout";
import { useState } from "react";

interface Props {
    data: {
        seo_title?: string;
        seo_description?: string;
    };
    setData: (key: string, value: string) => void;
    errors: Partial<Record<"seo_description" | "seo_title", string>>;
}
const SeoForm = (props: Props) => {
    const { data, setData, errors } = props;

    const [charCount, setCharCount] = useState({
        seo_title: data.seo_title?.length || 0,
        seo_description: data.seo_description?.length || 0,
    });
    const handleInputChange = (
        key: "seo_title" | "seo_description",
        value: string,
    ) => {
        setData(key, value);
        setCharCount((prev) => ({ ...prev, [key]: value.length }));
    };
    const isValidRange = (length: number, min: number, max: number) => {
        return length >= min && length <= max;
    };
    return (
        <div className="space-y-3">
            <FormFieldLayout
                fieldName="seo_title"
                label="Titre SEO"
                error={errors.seo_title}
            >
                <Input
                    id="seo_title"
                    type="text"
                    name="seo_title"
                    placeholder="Votre titre SEO"
                    value={data.seo_title}
                    className="mt-1 block w-full py-3 border"
                    onChange={(e) =>
                        handleInputChange("seo_title", e.target.value)
                    }
                />
                <small
                    className={`${
                        isValidRange(charCount.seo_title, 50, 60)
                            ? "text-green-500"
                            : "text-orange-500"
                    }`}
                >
                    {charCount.seo_title} caractères (Idéalement entre 50 et 60
                    caractères maximum)
                </small>
            </FormFieldLayout>

            <FormFieldLayout
                fieldName="seo_description"
                label="Description SEO"
                error={errors.seo_description}
            >
                <Textarea
                    placeholder="Votre description SEO"
                    className="resize-none"
                    id="seo_description"
                    name="seo_description"
                    value={data.seo_description}
                    onChange={(e) =>
                        handleInputChange("seo_description", e.target.value)
                    }
                />
                <small
                    className={`${
                        isValidRange(charCount.seo_description, 50, 160)
                            ? "text-green-500"
                            : "text-orange-500"
                    }`}
                >
                    {charCount.seo_description} caractères (Idéalement entre 50
                    et 160 caractères maximum)
                </small>
            </FormFieldLayout>
        </div>
    );
};

export default SeoForm;
